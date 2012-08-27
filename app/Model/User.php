<?php

class User extends AppModel{
    
    public $validate = array(
      'username' => array(
          array(
          'rule'        => 'isUnique',
          'allowEmpty'  => false,
          'message'     => "Ce nom d'utilisateur n'est pas disponible"
              ),
          array(
              'rule'    => 'alphanumeric',
              'required'=> 'true',
              'message'     => "Ce nom d'utilisateur est déjà pris"
          )
      ),
      'mail' => array(
          array(
          'rule'        => 'email',
          'required'    => 'true',
          'allowEmpty'  => false,
          'message'     => "Cet email n'est pas disponible"
              ),
          array(
              'rule'=> 'isUnique',
              'message' => "Cet email est déjà pris"
          )
      ),   
      'password' => array(
          'rule'        => 'notEmpty',
          'required'    => false,
          'message'     => "Vous ne pouvez pas enregistrer de mot de passe",
          'allowEmpty'  => false
      )  
    );
    
    	var $name = 'User';
	var $hasMany = array('Post'=>array('className'=>'Post'),
            'Comment',
            'Like',
            'Message'
            );
        
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
        'small' => array('width' => 22, 'height' => 22,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true),
        'bestDjinn' => array('width' => 98, 'height' => 98,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true),  
        'profile' => array('width' => 46, 'height' => 46,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true),
        'profileBig' => array('width' => 220, 'height' => 220,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true),
        'dropdown' => array('width' => 32, 'height' => 32,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true)
        )
    ) 
    ));
}