<div class="page-header">
    <h1>Bonjour !</h1><small>vous êtes presque connecté, il ne vous reste plus qu'a choisir un pseudo</small>
</div>

<?php

echo $this->Form->create('User');
echo $this->Form->input('username', array('label'=>'Pseudo'));
echo $this->Form->end('Envoyer');

?>