
    <div class="container">
     <div class="row">
        <div class="span6" id="inscription-page">
          <header>
            <h1>Inscription</h1>
            <br>
            <p>Commencez des maintenant √† r√©aliser vos souhaits les plus chers en vous inscrivant sur Djinn.</p>
          </header>
          <p class="align-center">
            <a href="<?php echo $this->Html->url(array('action'=>'facebook')); ?>" class="facebookConnect">Inscrivez vous avec Facebook</a>
            <a class="btn btn-primary" href="#"><img src="/Djinn/img/facebook-white.png"> Inscrivez vous avec Facebook</a>
            <a class="btn btn-info" href="#"><img src="/Djinn/img/twitter-white.png"> Inscrivez-vous avec Twitter</a>
          </p>
          <form class="form-horizontal" action="inscription-confirmation.html">
              <?php echo $this->Form->create('User', array('label' => false)); ?>
            <fieldset>
              <legend>Inscription classique <small>Si vous pr√©f√©rez</small></legend>
              <div class="control-group">
                <label class="control-label" for="input01">Pr√©nom</label>
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
                  <?php echo $this->Form->input('password', array('label' => false)); ?>
                  <p class="help-block">Entrer un mot de passe s√ªr, de plus de 6 caract√®res.</p>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="input01">Confirmer le mot de passe</label>
                <div class="controls">
                  <?php echo $this->Form->input('password', array('label' => false)); ?>
                </div>
              </div>
              <div class="form-actions">
                    <label class="checkbox inline">
                      <input type="checkbox" id="inlineCheckbox1" value="option1"> J'ai lu et j'accepte les <a href="">conditions d'utilisation de Djinn</a>
                    </label>
                <button type="submit" class="btn btn-success">Cr√©er mon profil</button>
              </div>
            </fieldset>
          </form>
        </div><!--/span-->
      </div><!--/row-->
    </div><!--/container-->
