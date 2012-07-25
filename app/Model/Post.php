<?php
class Post extends AppModel{
    
    var $name = 'Post';
var $actsAs = array(
'MeioUpload.MeioUpload' => array(
  'filename' => array(        
    'create_directory' => true,
    'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
    'allowed_ext' => array('.jpg', '.jpeg', '.png'),
    'zoomCrop' => true,
    'thumbsizes' => array(
      'normal' => array('width' => 400, 'height' => 300),
      'small' => array('width' => 80, 'height' => 80,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true),
      'vignette' => array('width' => 100, 'height' => 100,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true),  
    ),
    'default' => 'default.jpg'
  ) 
));
    public $hasMany = array(
        'Media' => array(
            'dependent'=> true
        ));
        
public $belongsTo = array(
    'Category' => array(
        'counterCache'=> array(
            'post_count'=> array('Post.online'=>1)
        )
    ),
    'User' => array(
        'className'    => 'User'
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
}
?>
