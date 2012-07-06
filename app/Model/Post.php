<?php
class Post extends AppModel{
    
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


    public function afterFind($data) {
        foreach ($data as $k=>$d){
            if(isset($d['Post']['slug']) && isset($d['Post']['id'])){
                $d['Post']['link'] = array(
                        'controller'=> 'pages',
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
