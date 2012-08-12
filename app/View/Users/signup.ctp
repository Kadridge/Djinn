
    <div class="container">
     <div class="row">
        <div class="span6" id="inscription-page">
          <header>
            <h1>Inscription</h1>
            <br>
            <p>Commencez des maintenant pour réaliser vos souhaits les plus chers en vous inscrivant sur Djinn.</p>
          </header>
          <p class="align-center">
            <a href="<?php echo $this->Html->url(array('action'=>'facebook')); ?>" class="facebookConnect">Inscrivez vous avec Facebook</a>
            <a class="btn btn-primary" href="#"><img src="/Djinn/img/facebook-white.png"> Inscrivez vous avec Facebook</a>
            <a class="btn btn-info" href="#"><img src="/Djinn/img/twitter-white.png"> Inscrivez-vous avec Twitter</a>
          </p>
              <?php echo $this->Form->create('User', array('label' => false)); ?>
              <legend>Inscription classique <small>Si vous préférez</small></legend>
              <div class="control-group">
                <label class="control-label" for="input01">Prénom</label>
                <div class="controls">
                  <?php echo $this->Form->input('username', array('label' => false)); ?>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="prependedInput">Adresse E-mail</label>
                <div class="controls">
                  <?php echo $this->Form->input('mail', array('label' => false)); ?>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="input01">Mot de passe</label>
                <div class="controls">
                  <?php echo $this->Form->input('pass1', array('label' => false, 'type'=>'password')); ?>
                  <p class="help-block">Entrer un mot de passe sur, de plus de 6 caractères.</p>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="input01">Confirmer le Mot de passe</label>
                <div class="controls">
                  <?php echo $this->Form->input('pass2', array('label'=>false, 'type'=>'password')); ?>
                  <p class="help-block">Entrer un mot de passe sur, de plus de 6 caracteres.</p>
                </div>
              </div>
                <?php echo $this->Form->end("S'enregistrer"); ?>
        </div><!--/span-->
      </div><!--/row-->
    </div><!--/container-->
