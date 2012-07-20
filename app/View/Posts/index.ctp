<style>
    .navbar-fixed-top{margin-bottom: 20px;}
    .sidebar-nav-fixed{width: auto;}
</style>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span2">
               <?php echo $this->element('sidebar'); ?>
        </div>

        <div class="span10">
        <!--Body content-->
            <?php foreach ($posts as $k => $v): $v = current($v); ?>
            <div class="box">
                <header>
                    <h3><?php echo $v['name']; ?></h3>
                </header>
                <div class="img-bloc">
                    <a href="" class="help-wish" rel="tipsy" title="Je réalise le souhait"><i class="icon-thumbs-up"></i></a>
                    <a href="" class="like-wish" rel="tipsy" title="Je soutiens"><i class="icon-heart"></i></a>
                    <a href="" class="comment-wish" rel="tipsy" title="Je commente"><i class="icon-comment"></i></a>
                    <?php echo $this->Text->truncate($v['content'], 100, array('exact'=>false, 'html'=>true)); ?>
                    <div class="author"><img class="commentAvatar" src="http://placehold.it/20x20"><p>Par <a href="profile.html">Thomas Bertin</a></p></div>
                    <div class="popularity">
                        <span>100000 <i class="icon-eye-open"></i></span>
                        <span>10 <i class="icon-heart"></i></span>
                        <span>100 <i class=" icon-comment"></i></span>
                    </div>
                    <a href="<?php echo $this->Html->url($v['link']) ;?>" class="btn" >Lire la suite</a>
                </div>

            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php echo $this->Paginator->numbers(); ?>