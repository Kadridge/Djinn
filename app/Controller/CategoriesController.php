<?php

class CategoriesController extends AppController{
    
    function sidebar(){
        
        return $this->Category->find('all');
    }


    function admin_index(){
        $d['categories'] = $this->Category->find('all');
        $this->set($d);
    }
    
    function admin_edit($id = null){
        if($this->request->is('post') || $this->request->is('put')){
            $this->Category->save($this->request->data);
            $this->Session->setFlash("La catégorie a bien été crée", "notif");
            $this->redirect(array('action'=>'index'));
        }elseif($id){
            $this->Category->id = $id;
            $this->request->data = $this->Category->read();
        }
    }
    
    function admin_delete($id){
        $this->Session->setFlash('La catégorie a bien été supprimée', 'notif');
        $this->Category->delete($id);
        $this->redirect($this->referer());
    }
}
