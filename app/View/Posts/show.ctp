<?php $this->set('title_for_layout', $post['Post']['name']); ?>
<div class="page-header">
    <h1><?php echo $post['Post']['name'];?></h1><small><?php echo $post['Category']['name']; ?></small>
</div>
<?php echo $this->element('sidebar'); ?>
<?php echo $post['Post']['content']; ?>
<p>Publié le: <?php echo $this->Date->french($post['Post']['created']); ?> Par <?php echo $post['User']['username']; ?></p>
