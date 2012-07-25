<div class="page-header">
    <h1>Gérer les catégories</h1>
</div>

<p><?php echo $this->Html->link("Ajouter une catégorie", array('action'=>'edit'), array('class'=>'btn btn-primary')); ?></p>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Actions</th>
    </tr>
    <?php foreach($categories as $k=>$v): $v = current($v); ?>
    <tr>
        <td><?php echo $v['id']; ?></td>
        <td><?php echo $v['name']; ?></td>
        <td>
            <?php echo $this->Html->link("Editer", array('action'=>'edit', $v['id'])); ?> -
            <?php echo $this->Html->link("Supprimer", array('action'=>'delete', $v['id']), null, 
                    'Voulez-vous vraiment supprimer cette page ?'); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
