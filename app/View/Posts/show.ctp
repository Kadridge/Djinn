<?php $this->set('title_for_layout', $post['Post']['name']); ?>
<div class="container">
  <div class="row">
      <div class="span9 wish-main">
        <div class="wish-detail">
          <header class="title-bloc">
          <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'show', $post['User']['id'])) ;?>"><img src="/Djinn/<?php echo $post['User']['dir']; ?>/thumb/profile/<?php echo $post['User']['filename']; ?>" alt="photo de profil" class="avatar"></a><!-- whitespace
--><div><h1><?php echo $post['Post']['name']; ?></h1>
          <p>Par <?php echo $this->Html->link($post['User']['username'], array('controller' => 'users', 'action' => 'show', $post['User']['id'])); ?><small><?php echo $this->Date->french($post['Post']['created']); ?></small></p></div>
        </header>
          <div class="align-center image-wish">
                <a href="" class="btn btn-success"><i class="icon-thumbs-up icon-white"></i> Je r√©alise son souhait</a>
                <a href="<?php echo $this->Html->url(array('action'=>'like', $post['Post']['id'])) ;?>" class="btn btn-primary"><i class="icon-heart icon-white"></i> Je le soutiens</a>
                <img src="/Djinn/<?php echo $post['Post']['dir']; ?>/thumb/bigWishPicture/<?php echo $post['Post']['filename']; ?>" />
          </div>
          <div class="wish-description">
            <?php echo $post['Post']['content']; ?>
          </div>
        </div>
        <div class="wish-comments">
          <header class="title-bloc">
            <div class="icon"></div><!-- whitespace
--><h2>Commentaires (<?php echo $post['Post']['comment_count']; ?>)</h2>
        </header>
          <div id="wish-comments-content">              
    <?php echo $this->Form->create('Comment', array('url'=>array('controller'=>'posts', 'action'=>'show', $post['Post']['id']))); ?>
        <?php echo $this->Form->input('content', array('label'=>'Laisser un commentaire')); ?>
        <?php echo $this->Form->input('post_id', array('type'=>'hidden', 'value'=>$post['Post']['id'])); ?>
        <?php echo $this->Form->input('user_id', array('type'=>'hidden', 'value'=>$this->Session->read('Auth.User.id'))); ?>
    <?php echo $this->Form->end('Publier votre commentaire'); ?>
              
            <ol class="commentlist">
                <?php foreach ($comments as $k => $v): ?>
              <li>
                <article class="clearfix">
                  <div class="avatar">
                    <img alt="" src="/Djinn/<?php echo $v['User']['dir']; ?>/thumb/profile/<?php echo $v['User']['filename']; ?>" class="avatar">       
                  </div>
                  <div class="comment-text">
                    <h4><?php echo $this->Html->link($v['User']['username'], array('controller' => 'users', 'action' => 'show', $v['User']['id'])); ?></h4>                                     
                    <p><?php echo $v['Comment']['content']; ?></p>
                    <time datetime="2012-07-13"><small><?php echo $v['Comment']['created']; ?></small></time>
                  </div>
                </article>
              </li>
              <?php endforeach; ?>
            </ol>
          </div>
        </div>
      </div>
      <div class="span3 wish-info">
        <div class="state-wish">
          <h3>Le souhait n'a pas encore √©t√© r√©alis√© !</h3>
        </div>
        <div class="more-info-wish">
          <header class="title-bloc">
              <div class="icon"></div><!-- whitespace
  --><h2>Infos</h2>
          </header>
          <ul>
            <li><i class="icon-heart"></i> <?php echo $post['Post']['like_count']; ?> soutiens</li>
            <li><i class="icon-comment"></i> <?php echo $post['Post']['comment_count']; ?> commentaires</li>
            <li><i class="icon-eye-open"></i> <?php echo $post['Post']['view_count']; ?> vues</li>
            <li><i class="icon-share"></i> http://drbl.in/eDKU</li>
          </ul>
        </div>
        <div class="tags">
          <header class="title-bloc">
              <div class="icon"></div><!-- whitespace
  --><h2>Tags</h2>
          </header>
          <p>
            <?php foreach ($post['Tag'] as $k => $v): ?>
            <span class="label"><?php echo $this->Html->link($v['name'], array('action'=>'tag', $v['name'])); ?></span>
          <?php endforeach; ?>
          </p>
        </div>
          <div class="tags">
          <header class="title-bloc">
              <div class="icon"></div><!-- whitespace
  --><h2>Vos soutiens</h2>
          </header>
               <?php foreach ($users as $k => $v): ?>
                <article class="clearfix">
                  <div class="avatar">
                    <img alt="" src="/Djinn/<?php echo $v['User']['dir']; ?>/thumb/profile/<?php echo $v['User']['filename']; ?>" class="avatar">       
                  </div>
                </article>
              <?php endforeach; ?>
        </div>
      </div>
  </div><!--/row-->
  <p id="back-top">
    <a href="#top"><span></span></a>
  </p>
</div><!--/.container-->