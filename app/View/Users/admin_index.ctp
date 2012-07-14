<div class="page-header">
    <h1>Gérer les utilisateurs</h1>
</div>

<p><?php echo $this->Html->link("Ajouter un utilisateur", array('action'=>'edit'), array('class'=>'btn btn-primary')); ?></p>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Login</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>
    <?php foreach($users as $k=>$v): $v = current($v); ?>
    <tr>
        <td><?php echo $v['id']; ?></td>
        <td><?php echo $v['username']; ?></td>
        <td><?php echo $v['role']; ?></td>
        <td>
            <?php echo $this->Html->link("Editer", array('action'=>'edit', $v['id'])); ?> -
            <?php echo $this->Html->link("Supprimer", array('action'=>'delete', $v['id']), null, 
                    'Voulez-vous vraiment supprimer cet utilisateur ?'); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php echo $this->Paginator->numbers(); ?>
