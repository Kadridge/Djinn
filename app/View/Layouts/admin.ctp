<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
    <?php echo $title_for_layout; ?>
  </title>
        <link rel="alternate" type="application/rss+xml" title="Djinn" href="<?php echo $this->Html->url(array('controller'=>'posts','action'=>'feed','ext'=>'rss')); ?>"></link>
        <link rel="stylesheet/less" href="<?php echo $this->Html->url('/css/bootstrap.less'); ?>"></link>
        <?php echo $this->Html->script('less'); ?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
  </head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">

      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
                  <?php echo $this->Html->image("logo.png", array(
               "alt" => "Logo Djinn", "class"=>"brand",
                'url' => array('controller' => 'posts', 'action' => 'admin_index')
                )); ?>
        <div class="nav-collapse">
        <ul class="nav">
            <li><?php echo $this->Html->link("Gestion des pages", array('action'=>'index', 'controller'=>'pages')); ?></li>
            <li><?php echo $this->Html->link("Gestion des souhaits", array('action'=>'index', 'controller'=>'posts')); ?></li>
            <li><?php echo $this->Html->link("Gestion des catégories", array('action'=>'index', 'controller'=>'categories')); ?></li>
            <li><?php echo $this->Html->link("Gestion des utilisateurs", array('action'=>'index', 'controller'=>'users')); ?></li>
            <li><?php echo $this->Html->link("Retourner au site", '/'); ?></li>
            <li><?php echo $this->Html->link("Se déconnecter", array('controller'=>'users', 'action'=>'logout', 'admin'=>false)); ?></li>
        </ul>
      </div><!--/.nav-collapse -->

    </div>
  </div>
</div>

<div class="container-fluid">

    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>
    
</div><!--/.fluid-container-->
<footer>
  <div class="container-fluid">
    <p>&copy; Djinn 2012</p>
  </div>
</footer>
</body>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<?php echo $this->Html->script('bootstrap-dropdown'); ?>
<?php echo $this->Html->script('masonry'); ?>
<?php echo $this->Html->script('main'); ?>
<?php echo $this->element('sql_dump'); ?>
    <?php echo $this->Html->script('admin'); ?>
    <?php echo $scripts_for_layout; ?>
</html>
