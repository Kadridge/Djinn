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
          'message'     => "Vous ne pouvez pas enregistrer de mot de passe",
          'allowEmpty'  => false
      )  
    );
    
    	var $name = 'User';
	var $hasMany = array('Post'=>array('className'=>'Post'));
        
    var $actsAs = array(
    'MeioUpload.MeioUpload' => array(
    'filename' => array(
        'create_directory' => true,
        'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
        'allowed_ext' => array('.jpg', '.jpeg', '.png'),
        'zoomCrop' => true,
        'thumbsizes' => array(
        'normal' => array('width' => 400, 'height' => 300),
        'small' => array('width' => 50, 'height' => 50,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true),
        'vignette' => array('width' => 100, 'height' => 100,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true),  
        )
    ) 
    ));
}