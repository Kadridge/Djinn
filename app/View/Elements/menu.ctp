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
          <li id="login"><a href="#contact">Se connecter</a></li>
        </ul>         
        <ul class="nav pull-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="sign-up">Nous rejoindre <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Connexion Facebook</a></li>
              <li><a href="#">Connexion Twitter</a></li>
              <li class="divider"></li>
              <li><a href="#">Inscription classique</a></li>
            </ul>
          </li>
        </ul>
        <div class="input-prepend pull-right" id="research">
              <span class="add-on"><i class="icon-search"></i></span><input placeholder="Rechercher" class="span3" id="inputIcon" type="text">
        </div>
      </div><!--/.nav-collapse -->
          </div>
  </div>
</div>
