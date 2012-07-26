

<?php $this->set('title_for_layout', $post['Post']['name']); ?>
<div class="page-header">
    <h1><?php echo $post['Post']['name'];?></h1><small><?php echo $post['Category']['name']; ?></small>
</div>
<?php echo $this->element('sidebar'); ?>
<?php echo $post['Post']['content']; ?>
<p>Publié le: <?php echo $this->Date->french($post['Post']['created']); ?> Par <?php echo $this->Html->link($post['User']['username'], array('controller' => 'users', 'action' => 'show', $post['User']['id'])); ?></p>


<?php foreach ($comments as $k => $v): ?>
<div class="author"><img class="commentAvatar" src="/Djinn/<?php echo $v['User']['dir']; ?>/thumb/small/<?php echo $v['User']['filename']; ?>"><p>Par <?php echo $this->Html->link($v['User']['username'], array('controller' => 'users', 'action' => 'show', $v['User']['id'])); ?></p></div>
<?php echo $v['Comment']['content']; ?>
<?php endforeach; ?>


