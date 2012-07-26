<?php

class PostsController extends AppController {

    public $helpers = array('Date');
    public $components = array('RequestHandler');

    function menu(){
        $pages = $this->Post->find('all',array(
            'conditions' => array('type' => 'post', 'online' => 1),
            'fields'     => array('id', 'slug', 'name')
        ));
        
            return $pages;
        }
        
        function category($category){
            $cat = $this->Post->Category->find('first', array(
                'conditions' => array(
                    'slug' => $category
                )
            ));
            if(empty($cat))
                throw new NotFoundException('Aucune catégorie ne correspond à cet ID');
            $d['posts'] = $this->Paginate('Post', array('type'=>'post', 'online'=>1, 'category_id'=> $cat['Category']['id']));
            $this->set($d);
            $this->render('index');
        }
        
    function index(){
        $this->Post->recursive = 0;
            $d['posts'] = $this->Paginate('Post', array('type'=>'post', 'online'=>1, 'Post.created <= NOW()'));
            $this->set($d);
        }
        
    function show($id = null, $slug = null){
        $post = $this->Post->find('first',array(
            'conditions' => array('Post.id' => $id),
            'recursive'  => 1
        ));
        $d['comments'] = $this->Post->Comment->find('all', array(
            'conditions' => array('Post.id' => $id)
        ));
        if(!$id)
            throw new NotFoundException('Aucune page ne correspond à cet ID');
        if(empty($post))
            throw new NotFoundException('Aucune page ne correspond à cet ID');
        if($slug != $post['Post']['slug'])
            $this->redirect ($post['Post']['link'],301);
        $d['post'] = $post;
        $this->set($d);
    }
    
    function feed(){
        if($this->RequestHandler->isRss() ){
        $d['posts'] = $this->Post->find('all', array(
            'limit' => 20,
            'conditions' => array('type'=> 'post')
            ));
        return $this->set($d);
        }
    }
    
    function admin_index(){
        $d['posts'] = $this->Paginate('Post', array('type'=>'post', 'online >= 0'));   
        $this->set($d);
    }
    
    function admin_edit($id = null){
        $user_id = $this->Auth->user('id');
        if($this->request->is('put') ||$this->request->is('post')){
            $d = $this->request->data;
            $d['Post']['user_id'] = $user_id;
            if($this->Post->save($d)){
                $this->Session->setFlash("Le contenu a bien été modifié", "notif");
                $this->redirect(array('action'=>'index'));
            }

        }elseif($id){
            $this->Post->id = $id;
            $this->request->data = $this->Post->read();
        }else{
            $this->request->data = $this->Post->getDraft('post');
        }
        $d['categories'] = $this->Post->Category->find('list');
        $this->set($d);

    }
    
    function admin_delete($id){
        $this->Session->setFlash('L\'article a bien été supprimée', 'notif');
        $this->Post->delete($id);
        $this->redirect($this->referer());
    }
}