<?php $this->set('title_for_layout', $user['User']['username']); ?>
<div class="container" id="profile">
  <div class="row">
      <div class="span3 profile-info">
        <img src="/Djinn/<?php echo $user['User']['dir']; ?>/thumb/profileBig/<?php echo $user['User']['filename']; ?>">
        <div id="contact-info">
          <h2>
          <?php echo $user['User']['username']; ?>
          </h2>
          <div class="location">
          <i class="icon-map-marker"></i> Barcelona, Spain
          </div>
          <div id="bio">
          <p>I'm UI/UX designer and co-founder of LaTroupe Studios, a company located in Barcelona. We make iOS &amp; Android applications and User Interface Design.</p>
          </div>
          <img src="/Djinn/img/twitter.png">
          <a href="http://twitter.com/intent/user?screen_name=@jordimanuel" id="contact_designer_twitter">@jordimanuel</a>
          <br>
          <img src="/Djinn/img/facebook.png"> <a href="">facebook.com/Jordimanuel</a>
          <br>
          <i class="icon-globe"></i> <a href="http://dribbble.com/jordimanuel">dribbble.com/jordimanuel</a>
          <br><br>
          <button class="btn btn-success"><i class="icon-envelope icon-white"></i> Contacter</button>
        </div>
      </div>
      <div class="span6 profile-main">
        <ul class="nav nav-tabs" id="myTab">
          <li class="active"><a href="#souhaits-perso">Souhaits personnels (4)</a></li>
          <li><a href="#souhaits-soutenus">Souhaits exauc√©s pour les autres (10)</a></li>
        </ul>
         
        <div class="tab-content">
          <div class="tab-pane active" id="souhaits-perso">
              <?php foreach ($posts as $k => $v): ?>
          <div class="box">
            <a href="#" class="title">
              <h3><?php echo $v['Post']['name']; ?></h3>
            </a>
              <div class="img-bloc">
                <a href="" class="help-wish" rel="tipsy" data-original-title="Je r√©alise le souhait"><i class="icon-thumbs-up"></i></a>
                <a href="" class="like-wish" rel="tipsy" data-original-title="Je soutiens"><i class="icon-heart"></i></a>
                <a href="" class="comment-wish" rel="tipsy" data-original-title="Je commente"><i class="icon-comment"></i></a>
                <a href="<?php echo $this->Html->url($v['Post']['link']) ;?>"><img src="/Djinn/<?php echo $v['Post']['dir']; ?>/thumb/wishPicture/<?php echo $v['Post']['filename']; ?>"></a>
              </div>        
              <div class="wish-stat">
                 <div class="icons-stat">100000 <i class="icon-eye-open"></i></div><!-- whitespace
--><div class="icons-stat">10 <i class="icon-heart"></i></div><!-- whitespace
--><div class="icons-stat">100 <i class=" icon-comment"></i></div>
              </div>
          </div>
              <?php endforeach; ?>
          </div>
          <div class="tab-pane" id="souhaits-soutenus">
          </div>
        </div>
      </div>
      <div class="span3 sidebar-profile">
        <header class="title-bloc">
          <div class="icon"></div><!-- whitespace
--><h2>Activit√© r√©cente</h2>
        </header>
        <ul>
          <li class="like-li">A soutenu <a href="">Jordan Forestier</a><br><small>Il y a une heure</small></li>
          <li class="achieve-li">A r√©alis√© le voeu de <a href="">Florian Ismael</a><br><small>Il y a deux jours</small></li>
          <li class="comment-li">A comment√© le voeu de <a href="">Tristan</a><br><small>Il y a Une semaine</small></li>
          <li class="like-li">A soutenu <a href="">Augustin</a><br><small>Il y a un mois</small></li>
        </ul>
      </div>
  </div><!--/row-->
</div>