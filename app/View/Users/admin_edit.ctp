<div class="page-header">
    <h1>Editer un utilisateur</h1>
</div>

<?php echo $this->Form->create('User'); ?>

    <?php echo $this->Form->input('username', array('label'=>"Nom d'utilisateur")); ?>
    <?php echo $this->Form->input('password', array('label'=>'Mot de passe')); ?>
    <?php echo $this->Form->input('passwordconfirm', array('label'=>'Confirmer votre mot de passe', 'type'=>'password')); ?>
    <?php echo $this->Form->input('role', array('label'=>'Role')); ?>
    <?php echo $this->Form->input('id'); ?>
<?php echo $this->Form->input('active', array('label'=>'Activé ?', 'type'=>'checkbox')); ?>

<?php echo $this->Form->end('Envoyer'); ?>