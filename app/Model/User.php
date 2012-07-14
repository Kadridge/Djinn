<?php

class User extends AppModel{
    
    public $validate = array(
      'username' => array(
          'rule'        => 'isUnique',
          'allowEmpty'  => false,
          'message'     => "Ce nom d'utilisateur n'est pas disponible"
      ),   
      'password' => array(
          'rule'        => 'notEmpty',
          'message'     => "Vous ne pouvez pas enregistrer de mot de passe"
      )  
    );
    
    function beforeSave($options = array()) {
        if(!empty($this->data['User']['password'])){
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        }
        return true;
    }
}