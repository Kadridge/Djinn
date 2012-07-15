<?php $this->set('title_for_layout', "Editer mon profil"); ?>

<?php echo $this->Form->create('User'); ?>
    <?php echo $this->Form->input('firstname', array('label' => "Prénom")); ?>
    <?php echo $this->Form->input('lastname', array('label' => "Nom")); ?>
    <?php echo $this->Form->input('pass1', array('label'=>'Mot de passe', 'type'=>'password')); ?>
    <?php echo $this->Form->input('pass2', array('label'=>'Confirmer votre mot de passe', 'type'=>'password')); ?>
<?php echo $this->Form->end('Modifier'); ?>