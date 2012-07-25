<?php $pages = $this->requestAction(array('controller'=>'pages','action'=>'menu')); ?>   
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">

      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <a class="brand" href="#"><?php echo $this->Html->image('logo.png'); ?></a>
<div class="nav-collapse">
        <ul class="nav">
            <?php foreach($pages as $k=>$v): $v = current($v); ?>
            <li><?php echo $this->Html->link($v['name'], $v['link']); ?></li>
            <?php endforeach; ?>
            <li><?php echo $this->Html->link('News', array('controller'=>'posts','action'=>'index')); ?></li>
        </ul>
        <ul class="nav pull-right">
          <?php if(AuthComponent::user('id')): ?>
            <?php if($this->Session->read('Auth.User.role') == 'admin'): ?>
                <li id="login"><?php echo $this->Html->link("Admin", '/admin/pages'); ?></li>
           <?php endif; ?>
            <li id="login"><?php echo $this->Html->link("Se déconnecter", array('action'=>'logout', 'controller'=>'users')); ?></li>
            <li id="login"><?php echo $this->Html->link("Mon compte", array('action'=>'show', 'controller'=>'users', $this->Session->read('Auth.User.id'))); ?></li>
          <?php else: ?>
          <li id="login"><?php echo $this->Html->link("Se connecter", array('action'=>'login', 'controller'=>'users')); ?></li>
          <li id="login"><?php echo $this->Html->link("S'inscrire", array('action'=>'signup', 'controller'=>'users')); ?></li>
          <?php endif; ?>
        </ul>         
        <div class="input-prepend pull-right" id="research">
              <span class="add-on"><i class="icon-search"></i></span><input placeholder="Rechercher" class="span3" id="inputIcon" type="text">
        </div>
      </div><!--/.nav-collapse -->
          </div>
  </div>
</div>
