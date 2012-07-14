<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

class AppController extends Controller {
    
    public $helpers = array('Text', 'Form', 'Html', 'Session', 'Cache');
    public $components = array('Session', 'Auth');


    function beforeFilter() {
        
        $this->Auth->loginAction = array('controller'=>'users', 'action'=>'login', 'admin'=>false);
        $this->Auth->authorize = array('Controller');
        
        if(!isset($this->request->params['prefix']))
            $this->Auth->allow();
        if(isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin'
                )
                    $this->layout = 'admin';
    }
    
    function isAuthorized($user){
        if(!isset($this->request->params['prefix'])){
            return true;
        }
        $roles = array(
            'admin' => 10,
            'user' => 5
        );
        if(isset($roles[$this->request->params['prefix']])){
            $lvlAction = $roles[$this->request->params['prefix']];
            $lvlUser = $roles[$user['role']];
            if($lvlUser >= $lvlAction){
                return true;
            }
        }   
        return false;
    }
}
