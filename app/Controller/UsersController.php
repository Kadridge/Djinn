<?php
class UsersController extends AppController{
    
    
    function login(){
        if($this->request->is('post'))
            if($this->Auth->login()){
                return $this->redirect($this->Auth->redirect());
            }else{
                $this->Session->setFlash("Login ou mot de passe incorrect", "notif", array('type'=>'error'));
            }
    }
    
    function logout(){
        $this->Auth->logout();
        $this->Session->setFlash("Vous avez été déconnecté", "notif");
        $this->redirect('/');
    }
    
    function admin_index(){
        $d['users'] = $this->Paginate('User');
        $this->set($d);
    }
    
    function admin_edit($id=null){
        if($this->request->is('post') || $this->request->is('put')){
            $d = $this->request->data['User'];
            if($d['password'] != $d['passwordconfirm']){
                $this->Session->setFlash("les mots de passes ne correspondent pas", "notif",array('type'=>'error'));
            }else{
                if(empty($d['password']))
                    unset($d['password']);
                if($this->User->save($d)){
                    $this->Session->setFlash("L'utisateur a bien été enregistrée", "notif");
                }
            }
        }elseif($id){
            $this->User->id = $id;
            $this->request->data = $this->User->read('username, role, id');
        }
        $d = array();
        $d['roles'] = array(
            'admin'=>'admin',
            'user'=>'membre'
        );
        $this->set($d);
    }
    
    function admin_delete($id){
        $this->User->delete($id);
        $this->Session->setFlash("Utilisateur supprimé", "notif");
        $this->redirect($this->referer());
    }
}
