<?php
class Post extends AppModel{
    
    var $name = 'Post';
    var $actsAs = array(
        'Containable',
    'MeioUpload.MeioUpload' => array(
    'filename' => array(        
        'create_directory' => true,
        'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
        'allowed_ext' => array('.jpg', '.jpeg', '.png'),
        'zoomCrop' => true,
        'thumbsizes' => array(
        'normal' => array('width' => 400, 'height' => 300),
        'bigWishPicture' => array('width' => 220, 'height' => 220,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true),
        'wishPicture' => array('width' => 200, 'height' => 200,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true), 
        'mozaic' => array('width' => 120, 'height' => 120,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true)
        ),
        'default' => 'default.jpg'
    ) 
    ));
    
public $hasAndBelongsToMany = array('Tag');


public $hasMany = array(
        'Media' => array(
            'dependent'=> true
        ),
        'Comment',
        'PostTag'
        );
        
public $belongsTo = array(
    'Category' => array(
        'counterCache'=> array(
            'post_count'=> array('Post.online'=>1)
        )
    ),
    'User' => array(
        'fields'    => array('id','username', 'filename', 'dir')
    )
);

    public $validate = array(
      'slug' => array(
          'rule'        => '/^[a-z0-9\-]+$/',
          'allowEmpty'  => true,
          'message'     => "L'URL n'est pas valide"
      ),   
      'name' => array(
          'rule'        => 'notEmpty',
          'message'     => "Vous devez préciser un titre"
      )  
    );

    public $order = 'Post.created DESC';
            
    public function getDraft($type){
        $post = $this->find('first', array(
            'conditions'=> array('online' => -1, 'type'=> $type)
        ));
        if(empty($post)){
            $this->save(array(
                'type'=> $type,
                'online'=> -1
            ), false);
            $post = $this->read();
        }
        $post['Post']['online'] = 0;
        return $post;
    }

    public function afterFind($data) {
        foreach ($data as $k=>$d){
            if(isset($d['Post']['slug']) && isset($d['Post']['id']) && isset($d['Post']['type'])){
                $d['Post']['link'] = array(
                        'controller'=> Inflector::pluralize($d['Post']['type']),
                        'action'    => 'show',
                        'id'        => $d['Post']['id'],
                        'slug'      => $d['Post']['slug']
                    );
            }
            $data[$k] = $d;
        }
        return $data;
    }
    
    public function beforeSave() {
        if(empty($this->data['Post']['slug']) && isset($this->data['Post']['slug']) && !empty($this->data['Post']['name']))
            $this->data['Post']['slug'] = strtolower(Inflector::slug($this->data['Post']['name']
                    ,'-'));
        return TRUE;
    }
    
    public function afterSave() {
        
        if(!empty($this->data['Post']['tags'])){
            $tags = explode(',', $this->data['Post']['tags']);
            foreach ($tags as $tag) {
                $tag = trim($tag);
                if(!empty($tag)){
                    $d = $this->Tag->findByName($tag);
                    if(!empty($d)){
                        $this->Tag->id = $d['Tag']['id'];
                    }else{
                        $this->Tag->create();
                        $this->Tag->save(array(
                            'name' => $tag
                        ));
                    }
                    $this->PostTag->create();
                    $this->PostTag->save(array(
                        'post_id' =>  $this->id,
                        'tag_id'=>  $this->Tag->id
                    ));
                }
            }
            return true;
        }
    }
}
?>
