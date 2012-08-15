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
        
        function tag($name){
            $this->loadModel('PostTag');
            $this->PostTag->contain('Tag', 'Post');
            $posts = $this->Paginate('PostTag', array(
                'Tag.name'=>$name,
                'Post.type'=> 'post',
                'Post.online'=>1,
                'Post.created <= Now()'
                ));
            $posts_ids = Set::Combine($posts, '{n}.PostTag.post_id', '{n}.PostTag.post_id');
            $d['posts'] = $this->Post->find('all', array(
               'conditions' => array('Post.id'=>$posts_ids) 
            ));
            $this->set($d);
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
        $this->Post->contain('User', 'Category', 'Comment', 'Like');
        $this->paginate = array(
        'conditions' => array('Post.type' => 'post','Post.online'=>1, 'Post.created <= NOW()' ),
        'limit' => 4
        );
        $d['posts'] = $this->paginate('Post');
        $this->set($d);
        }
        
        function like(){
        $post_id = $this->params['pass'][0];
        $user_id = AuthComponent::user('id');
        $tab = array(
            'user_id' => $user_id,
            'post_id'=> $post_id
        );
        if(!empty($tab)){
            if(AuthComponent::user('id')){
                $this->Post->Like->save($tab);
                $this->Post->updateAll(array('Post.like_count' => 'Post.like_count + 1'), array( 'Post.id' => $post_id));
                $this->redirect(array('action'=>'index'));
                $this->Session->setFlash("Votre commentaire a bien été posté", "notif");
            }else{
                $this->redirect(array('action'=>'index'));
                $this->Session->setFlash("Vous devez être connecté pour poster un commentaire", "notif", array('type'=>'error'));
            }
        }
        }
        
    function show($id = null, $slug = null){
        $post = $this->Post->find('first',array(
            'conditions' => array('Post.id' => $id),
            'recursive'  => 1
        ));
        $d['comments'] = $this->Post->Comment->find('all', array(
            'conditions' => array('Post.id' => $id)
        ));
        if(!empty($this->data)){
            if(AuthComponent::user('id')){
                $this->Post->Comment->save($this->data);
                $this->Session->setFlash("Votre commentaire a bien été posté", "notif");
            }else{
                $this->Session->setFlash("Vous devez être connecté pour poster un commentaire", "notif", array('type'=>'error'));
            }
        }
        if(!$id)
            throw new NotFoundException('Aucune page ne correspond à cet ID');
        if(empty($post))
            throw new NotFoundException('Aucune page ne correspond à cet ID');
        if($slug != $post['Post']['slug'])
            $this->redirect($post['Post']['link'],301);
        $d['count'] = $this->Post->Comment->find('count');
        $d['post'] = $post;
        $this->Post->updateAll(array( 'Post.view_count' => 'Post.view_count + 1'), array( 'Post.id' => $post['Post']['id']));
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
        if($this->request->is('put') || $this->request->is('post')){
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
        $this->Post->PostTag->contain('Tag');
        $d['tags'] = $this->Post->PostTag->find('all', array(
            'conditions'=>array('PostTag.post_id'=>$id)
        ));
        $this->set($d);

    }
    
    function admin_delete($id){
        $this->Session->setFlash('L\'article a bien été supprimée', 'notif');
        $this->Post->delete($id);
        $this->redirect($this->referer());
    }
    
    function admin_delTag($id){
        $this->Post->PostTag->delete($id);
        $this->Session->setFlash('Le tag a bien été supprimée', 'notif');
        $this->redirect($this->referer());
    }
        
    function admin_search() {

        $d = $this->request->data['Post']; 
       $d['posts'] = $this->paginate('Post', array('or'=>array('Post.content LIKE' => "%".$d['name']."%", 'Post.name LIKE' => "%".$d['name']."%")));
      
    $this->set($d);
  }
  
      function search() {

        $d = $this->request->data['Post']; 
       $d['posts'] = $this->paginate('Post', array('or'=>array('Post.content LIKE' => "%".$d['name']."%", 'Post.name LIKE' => "%".$d['name']."%")));
      $d['users'] = $this->Post->User->find('all', array('conditions'=>array('User.username LIKE' => "%".$d['name']."%")));
    $this->set($d);
  }
}