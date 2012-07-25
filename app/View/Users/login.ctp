<h2>Se connecter</h2>

<?php echo $this->Form->create('User');  ?>
    <?php echo $this->Form->input('username', array('label'=>"Nom d'utilisateur"));  ?>
    <?php echo $this->Form->input('password', array('label'=>'mot de passe'));  ?>
<?php echo $this->Form->end('Se connecter');  ?>

<?php echo $this->Html->link("Mot de passe oublié ?", array('action'=>'password', 'controller'=>'users'));  ?>
