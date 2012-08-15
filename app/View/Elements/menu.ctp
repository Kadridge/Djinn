<?php $pages = $this->requestAction(array('controller'=>'pages','action'=>'menu')); ?>   
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
            
          <?php echo $this->Html->image("logo.png", array(
               "alt" => "Logo Djinn", "class"=>"brand",
                'url' => array('controller' => 'posts', 'action' => 'index')
                )); ?>

          <div class="nav-collapse">
            <ul class="nav">
             <?php foreach($pages as $k=>$v): $v = current($v); ?>
              <li><?php echo $this->Html->link($v['name'], $v['link']); ?></li>
               <?php endforeach; ?>
                <li></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">A propos <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">A propos</a></li>
                  <li><a href="#">L'équipe</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Le blog</a></li>
                  <li><a href="#">Le forum</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Copyright</a></li>
                  <li><a href="#">Condition</a></li>
                  <li><a href="#">Confidentialité</a></li>
                </ul>
              </li>            
            <li>
                                   <?php
   echo $this->Form->create("Post",array('action' => 'search', 'class'=>'navbar-search'));
    echo $this->Form->input("name", array('label' => false, 'class'=>'search-query span3'));
    echo $this->Form->button('Rechercher', array('type'=>'button'));
    echo $this->Form->end(); 
    ?>
            </li>
             <?php if(AuthComponent::user('id')): ?>
            <?php if($this->Session->read('Auth.User.role') == 'admin'): ?>
                <li id="login"><?php echo $this->Html->link("Admin", '/admin/pages'); ?></li>
           <?php endif; ?>
            <li class="dropdown connect">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="nav-me"></i> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="current-user"><a href="<?php echo $this->Html->url(array("controller" => "users","action" => "show", $this->Session->read('Auth.User.id'))); ?>"><img src="/Djinn/<?php echo $this->Session->read('Auth.User.dir'); ?>/thumb/dropdown/<?php echo $this->Session->read('Auth.User.filename'); ?>"><span><?php echo $this->Session->read('Auth.User.username'); ?> <small>Voir ma page profil</small></span></a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-star"></i> Mes souhaits</a></li>
                <li><a href="#"><i class="icon-envelope"></i> Messages priv√©s</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-cog"></i> Param√®tres</a></li>
                <li><a href="#"><i class=" icon-question-sign"></i> Aide</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo $this->Html->url(array('action'=>'logout', 'controller'=>'users')); ?>"><i class="icon-remove-sign"></i> Déconnexion</a></li>
              </ul>
            </li>
          <?php else: ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="connexion">Connexion</a>
                <div class="well dropdown-menu">
                <?php echo $this->Form->create(null, array('url' => array('action' => 'login', 'controller' => 'users'))); ?>
                <?php echo $this->Form->input('User.username', array('class'=>"span 3",'label'=>"Nom d'utilisateur"));  ?>
                <?php echo $this->Form->input('User.password', array('class'=>"span 3",'label'=>"Mot de passe"));  ?>
                    <?php echo $this->Form->end('Se connecter');  ?>
                <div class="btn-group">
                    <a href="<?php echo $this->Html->url(array('action'=>'facebook', 'controller'=>'users')); ?>" class="facebookConnect">Se connecter avec facebook</a>
                    <button class="btn btn-primary"><?php echo $this->Html->image('facebook-white.png', array('alt' => 'facebook')); ?> Facebook</button>
                    <button class="btn btn-info"><?php echo $this->Html->image('twitter-white.png', array('alt' => 'twitter')); ?> Twitter</button>
                </div>
                <?php echo $this->Html->link("Mot de passe oublié ?", array('action'=>'password', 'controller'=>'users'));  ?>
                
              </div>
            </li>
          <li id="login"><?php echo $this->Html->link("S'inscrire", array('action'=>'signup', 'controller'=>'users')); ?></li>
          <?php endif; ?>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>