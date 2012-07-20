
    <!--Sidebar content-->
          <div class="well sidebar-nav-fixed">
        <header><h2>Rejoignez-nous dès maintenant pour réaliser vos souhaits et ceux des autres.</h2></header>
        <?php $categories = $this->requestAction(array('controller'=>'categories','action'=>'sidebar', 'admin' => false)); ?> 
        <ul class="nav nav-pills nav-stacked">
          <li class="nav-header">Navigation</li>
          <li class="active"><a href="#"><i class="icon-white icon-home"></i> Accueil</a></li>
          <li><a href="#"><i class="icon-star"></i> Mes souhaits</a></li>
          <li><a href="#"><i class="icon-user"></i> Mon profil</a></li>
          <li><a href="#"><i class="icon-cog"></i> Paramètres</a></li>
          <li><a href="#"><i class="icon-envelope"></i> Messages privées</a></li>
          <li><a href="#"><i class=" icon-question-sign"></i> Aide</a></li> 
          <?php foreach($categories as $k=>$v): $v = current($v); ?>
          <li><?php echo $this->Html->link($v['name'].' ('.$v['post_count'].')', $v['link']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div><!--/.well -->