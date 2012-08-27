<?php
class MessagesController extends AppController {

        function index(){
            $d['messages'] = $this->Message->find('all', array('conditions'=>array('or'=>array(
                'Message.userr_id' => AuthComponent::user('id'), 'Message.user_id'=>AuthComponent::user('id'))
                ),
                'group'=>'Message.session_id'
                ));
            $this->set($d);
        }
        
        function message($id = null){
            $d['messages'] = $this->Message->find('all', array(
                'conditions'=>array(
                'Message.session_id' => $id
            )));
            if(!empty($this->data)){
            if(AuthComponent::user('id')){
                $this->Message->save($this->data);
                $this->Session->setFlash("Votre message a bien été envoyé", "notif");
                $this->redirect($this->referer());
            }else{
                $this->Session->setFlash("Vous devez être connecté pour poster un commentaire", "notif", array('type'=>'error'));
            }
        }
            $this->set($d);
    }
  
}