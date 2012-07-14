<style>
    .navbar-fixed-top{margin-bottom: 20px;}
    .sidebar-nav-fixed{width: auto;}
</style>
<div class="container-fluid">
    <div class="row-fluid">
   <?php echo $this->element('sidebar'); ?>
    <div class="span10">
    <!--Body content-->
    <?php foreach ($posts as $k => $v): $v = current($v); ?>
<h2><?php echo $v['name']; ?></h2>
<?php echo $this->Text->truncate($v['content'], 100, array('exact'=>false, 'html'=>true)); ?>
<a href="<?php echo $this->Html->url($v['link']) ;?>" class="btn" >Lire la suite</a>
<?php endforeach; ?>
    </div>
    </div>
</div>

<?php echo $this->Paginator->numbers(); ?>