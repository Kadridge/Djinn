<div class="page-header">
    <h1>Résultat de la recherche des souhaits</h1>
</div>

<p><?php echo $this->Html->link("Ajouter un souhait", array('action'=>'edit'), array('class'=>'btn btn-primary')); ?></p>
   <?php
   echo $this->Form->create("Post",array('action' => 'admin_search'));
    echo $this->Form->input("name", array('label' => 'Rechercher un souhait'));
    echo $this->Form->end("Search"); 
    ?>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>En ligne</th>
        <th>Actions</th>
    </tr>
    <?php foreach($posts as $k=>$v): $v = current($v); ?>
    <tr>
        <td><?php echo $v['id']; ?></td>
        <td><?php echo $v['name']; ?></td>
        <td><?php echo $v['online'] == '0'?'<span class="label label-important">Hors ligne</span>':'<span class="label label-success">En ligne</span>'; ?></td>
        <td>
            <?php echo $this->Html->link("Editer", array('action'=>'edit', $v['id'])); ?> -
            <?php echo $this->Html->link("Supprimer", array('action'=>'delete', $v['id']), null, 
                    'Voulez-vous vraiment supprimer cette page ?'); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php echo $this->Paginator->numbers(); ?>
