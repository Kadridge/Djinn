<table class="table table-striped">
    <tr>
        <th>ID / ID</th>
        <th>Login / Login</th>
        <th>Nouveau</th>
        <th>Tronche / Tronche</th>
        <th>Conversation</th>
    </tr>
    <?php foreach($messages as $k=>$v): ?>
    <tr>
        <td><?php echo $v['SecondUser']['id']; ?> / <?php echo $v['FirstUser']['id']; ?></td>
        <td><?php echo $v['SecondUser']['username']; ?> / <?php echo $v['FirstUser']['username']; ?></td>
        <?php if($v['Message']['status'] == 1): ?>
        <td><span class="badge badge-important">Nouveau</span></td>
        <?php else: ?>
        <td><span class="hidden"></span></td>
        <?php endif; ?>
        <td><img src="/Djinn/<?php echo $v['SecondUser']['dir']; ?>/thumb/profile/<?php echo $v['SecondUser']['filename']; ?>" alt="photo de profil" class="avatar">  
        <img src="/Djinn/<?php echo $v['FirstUser']['dir']; ?>/thumb/profile/<?php echo $v['FirstUser']['filename']; ?>" alt="photo de profil" class="avatar">
        </td>
        <td>
            <?php echo $this->Html->link("Voir la convers", array('action'=>'message', $v['Message']['session_id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>