<?php

class PostsController extends AppController {


    function menu(){
        $pages = $this->Post->find('all',array(
            'conditions' => array('type' => 'post', 'online' => 1),
            'fields'     => array('id', 'slug', 'name')
        ));
        
            return $pages;
        }
        
        function index(){
            $d['posts'] = $this->Paginate('Post', array('type'=>'post', 'online'=>1));
            $this->set($d);
        }
        
    function show($id = null, $slug = null){
        $page = $this->Post->find('first',array(
            'conditions' => array('id' => $id, 'type'=>'post')
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
        $d['posts'] = $this->Paginate('Post', array('type'=>'post', 'online >= 0'));   
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
        }else{
            $this->request->data = $this->Post->getDraft('post');
        }
        $this->loadModel('Category');
        $d['categories'] = $this->Category->find('list');
        $this->set($d);

    }
    
    function admin_delete($id){
        $this->Session->setFlash('L\'article a bien été supprimée', 'notif');
        $this->Post->delete($id);
        $this->redirect($this->referer());
    }
}