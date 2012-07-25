<p>
    <strong>Bonjour <?php echo $username; ?></strong>
</p>

<p>Vous avez fait une demande de rappel de mot de passe, si c'est bien votre demande suivez le lien: </p>
<p><?php echo $this->Html->link('Rappeller mon mot de passe', $this->Html->url($link, true)); ?></p>