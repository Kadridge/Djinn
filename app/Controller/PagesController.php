<?php

class PagesController extends AppController {

    public $uses = array('Post');
    
    function menu(){
        $pages = $this->Post->find('all',array(
            'conditions' => array('type' => 'page', 'online' => 1),
            'fields'     => array('id', 'slug', 'name')
        ));
        
            return $pages;
        }
        
    function show($id = null, $slug = null){
        $page = $this->Post->find('first',array(
            'conditions' => array('id' => $id)
        ));
        if(!$id)
            throw new NotFoundException('Aucune page ne correspond à cet ID');
        if(empty($page))
            throw new NotFoundException('Aucune page ne correspond à cet ID');
        if($slug != $page['Post']['slug'])
            $this->redirect ($page['Post']['link'],301);
        $d['page'] = current($page);
        $this->set($d);
    }
    
    function admin_index(){
        $d['pages'] = $this->Paginate('Post', array('type'=>'page'));   
        $this->set($d);
    }
    
    function admin_edit($id = null){
        if($this->request->is('put') ||$this->request->is('post')){
            if($this->Post->save($this->request->data)){
                $this->Session->setFlash("Le contenu a bien été modifié", "notif");
                $this->redirect(array('action'=>'index'));
            }

        }elseif($id){
            $this->Post->id = $id;
            $this->request->data = $this->Post->read();
        }

    }
    
    function admin_delete($id){
        $this->Session->setFlash('La page a bien été supprimée', 'notif');
        $this->Post->delete($id);
        $this->redirect($this->referer());
    }
}