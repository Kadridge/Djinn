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
}