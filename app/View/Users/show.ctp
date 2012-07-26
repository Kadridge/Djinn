<?php $this->set('title_for_layout', 'SAlut'); ?>
<?php echo $this->element('sidebar'); ?>
Prenom:    <?php echo $user['User']['username']; ?><br>
Role:        <?php echo $user['User']['role']; ?><br>
            <?php echo $user['User']['firstname']; ?><br>
Avatar:     <img src="/Djinn/<?php echo $user['User']['dir']; ?>/thumb/vignette/<?php echo $user['User']['filename']; ?>"><br>
 <a href="<?php echo $this->Html->url(array ("action" => "edit"));?>" class="btn" >Editer Votre profile</a>