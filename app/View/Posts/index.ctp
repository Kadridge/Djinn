<div span="10 span-fixed-sidebar"><h1>Wishes</h1>
<?php foreach ($posts as $k => $v): $v = current($v); ?>
<h2><?php echo $v['name']; ?></h2>
<?php echo $this->Text->truncate($v['content'], 100, array('exact'=>false, 'html'=>true)); ?>
<a href="<?php echo $this->Html->url($v['link']) ;?>" class="btn" >Lire la suite</a>
<?php endforeach; ?>
</div>


<div span="2">
      <div class="well sidebar-nav-fixed">
        <header><h2>Rejoignez-nous dès maintenant pour réaliser vos souhaits et ceux des autres.</h2></header>
        <ul class="nav nav-pills nav-stacked">
          <li class="nav-header">Navigation</li>
          <li class="active"><a href="#"><i class="icon-white icon-home"></i> Accueil</a></li>
          <li><a href="#"><i class="icon-star"></i> Mes souhaits</a></li>
          <li><a href="#"><i class="icon-user"></i> Mon profil</a></li>
          <li><a href="#"><i class="icon-cog"></i> Paramètres</a></li>
          <li><a href="#"><i class="icon-envelope"></i> Messages privées</a></li>
          <li><a href="#"><i class=" icon-question-sign"></i> Aide</a></li>
        </ul>
      </div><!--/.well -->
</div>


<?php echo $this->Paginator->numbers(); ?>