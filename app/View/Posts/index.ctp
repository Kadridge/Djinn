<?php $this->set('title_for_layout', 'Djinn'); ?>
<div id="gallery-photos">
      <section>
        <div id="hero">
          <section>
            <h1>Faites un souhait !</h1>
            <p>Réalisez vos souhaits et ceux des autres sur Djinn.</p>
          </section>
          <img src="img/arrow.png" alt="En voir plus" id="more-info">
        </div>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
        <a href="#"><img src="http://lorempixel.com/120/120" /></a>
      </section>
    </div>
    <div class="container">
      <div id="day-wish">
        <header class="title-bloc">
          <div class="icon"></div><!-- whitespace
--><h2>Projets à la une</h2>
        </header>
        <div class="row">
          <section>
          <div id="slider" style="Width:800px;height:222px;">
          <ul>
              <?php foreach ($une as $k => $v): ?>
          <li>
            <div class="span3">
              <a href="<?php echo $this->Html->url($v['Post']['link']) ;?>"><img src="/Djinn/<?php echo $v['Post']['dir']; ?>/thumb/bigWishPicture/<?php echo $v['Post']['filename']; ?>"></a>
            </div>
            <div class="span7">
              <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'show', $v['User']['id'])) ;?>"><img src="/Djinn/<?php echo $v['User']['dir']; ?>/thumb/profile/<?php echo $v['User']['filename']; ?>" alt="photo de profil" class="avatar"></a>
             <div class="wish-title">
                <a href="#"><h3><?php echo $v['Post']['name']; ?></h3></a>
                <small>Par <?php echo $this->Html->link($v['User']['username'], array('controller' => 'users', 'action' => 'show', $v['User']['id'])); ?></small>
              </div>
              <div class="wish-content">
                <p>
                  <?php echo $this->Text->truncate($v['Post']['content'], 300, array('ending'=>'...', 'exact'=>'false')); ?>
                </p>
              </div>
              <div class="wish-stat">
                 <div class="icons-stat"><span><?php echo $v['Post']['view_count']; ?></span><div class="pic-stat"><i class="icon-eye-open icon-white"></i></div></div>
                 <div class="icons-stat"><span><?php echo $v['Post']['like_count']; ?></span><div class="pic-stat"><i class="icon-heart icon-white"></i></div></div>
                 <div class="icons-stat"><span><?php echo $v['Post']['comment_count']; ?></span><div class="pic-stat"><i class=" icon-comment icon-white"></i></div></div>
              </div>
            </div>
          </li>
          <?php endforeach; ?>
          </ul>
          </div>
            <div class="span2">
              <ul id="puces-navigation">
                <li class="slider-puce slider-puce-active" id="0">Design</li>
                <li class="slider-puce" id="1">Musique</li>
                <li class="slider-puce" id="2">Sport</li>
                <li class="slider-puce" id="3">Voyage</li>
                <li class="slider-puce" id="4">Musique</li>
                <li class="slider-puce" id="5">Technologie</li>
                <li class="slider-puce" id="6">Entreprise</li>
              </ul>
            </div>
          </section>
        </div>
      </div>
      <div id="popular-wish">
        <header class="title-bloc">
          <a href="#">
            <div class="icon"></div><!-- whitespace
--><h2>Souhaits les plus populaires</h2>
          </a>
        </header>
        <div class="container-wish">
            <?php foreach ($populars as $k => $v): ?>
          <div class="box">
            <div class="title">
              <h3 class="title"><?php echo $v['Post']['name']; ?></h3>
            </div>
              <div class="img-bloc">
                <a href="" class="help-wish" rel="tipsy" data-original-title="Je réalise le souhait"><i class="icon-thumbs-up"></i></a>
                <a href="<?php echo $this->Html->url(array('action'=>'like', $v['Post']['id'])) ;?>" class="like-wish" rel="tipsy" data-original-title="Je soutiens"><i class="icon-heart"></i></a>
                <a href="" class="comment-wish" rel="tipsy" data-original-title="Je commente"><i class="icon-comment"></i></a>
                <a href="<?php echo $this->Html->url($v['Post']['link']) ;?>"><img src="/Djinn/<?php echo $v['Post']['dir']; ?>/thumb/wishPicture/<?php echo $v['Post']['filename']; ?>"></a>
              </div>   
              <div class="author">
                <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'show', $v['User']['id'])) ;?>"><img src="/Djinn/<?php echo $v['User']['dir']; ?>/thumb/small/<?php echo $v['User']['filename']; ?>" alt="photo de profil" class="avatar"></a>
                <div class="wish-title">
                  <small>Par <?php echo $this->Html->link($v['User']['username'], array('controller' => 'users', 'action' => 'show', $v['User']['id'])); ?></small>
                </div>
              </div>         
              <div class="wish-stat">
                 <div class="icons-stat"><?php echo $v['Post']['view_count']; ?> <i class="icon-eye-open"></i></div><!-- whitespace
              --><div class="icons-stat"><?php echo $v['Post']['like_count']; ?><i class="icon-heart"></i></div><!-- whitespace
                --><div class="icons-stat"><?php echo $v['Post']['comment_count']; ?><i class=" icon-comment"></i></div>
              </div>
          </div>
            <?php endforeach; ?>
        </div>
      </div>
      <div id="recent-wish">
        <header class="title-bloc">
          <a href="#">
          <div class="icon"></div><!-- whitespace
--><h2>Souhaits récents</h2>
          </a>
        </header>
        <div class="container-wish">
            <?php foreach ($posts as $k => $v): ?>
          <div class="box">
            <div class="title">
              <h3><?php echo $v['Post']['name']; ?></h3>
            </div>
              <div class="img-bloc">
                <a href="" class="help-wish" rel="tipsy" data-original-title="Je réalise le souhait"><i class="icon-thumbs-up"></i></a>
                <a href="<?php echo $this->Html->url(array('action'=>'like', $v['Post']['id'])) ;?>" class="like-wish" rel="tipsy" data-original-title="Je soutiens"><i class="icon-heart"></i></a>
                <a href="" class="comment-wish" rel="tipsy" data-original-title="Je commente"><i class="icon-comment"></i></a>
                <a href="<?php echo $this->Html->url($v['Post']['link']) ;?>"><img src="/Djinn/<?php echo $v['Post']['dir']; ?>/thumb/wishPicture/<?php echo $v['Post']['filename']; ?>"></a>
              </div>   
              <div class="author">
                <a href="#"><img src="/Djinn/<?php echo $v['User']['dir']; ?>/thumb/small/<?php echo $v['User']['filename']; ?>" alt="photo de profil" class="avatar"></a>
                <div class="wish-title">
                  <small>Par <?php echo $this->Html->link($v['User']['username'], array('controller' => 'users', 'action' => 'show', $v['User']['id'])); ?></small>
                </div>
              </div>         
              <div class="wish-stat">
                 <div class="icons-stat"><?php echo $v['Post']['view_count']; ?> <i class="icon-eye-open"></i></div><!-- whitespace
              --><div class="icons-stat"><?php echo $v['Post']['like_count']; ?><i class="icon-heart"></i></div><!-- whitespace
                --><div class="icons-stat"><?php echo $v['Post']['comment_count']; ?><i class=" icon-comment"></i></div>
              </div>
          </div>
            <?php endforeach; ?>
        </div>
      </div> 
    </div> <!-- /container -->
    <div id="best-djinn">
      <div class="container">
        <header class="title-bloc">
          <div class="icon"></div><!-- whitespace
--><h2>Nos meilleurs Djinn</h2>
          <div class="border-grey"></div>
        </header>
          <ul>
            <li>
              <a href="" class="f1_container">
                <div class="f1_card">
                  <div class="front face">
                    <img src="http://lorempixel.com/98/98" />                
                  </div>
                  <div class="back face center">
                    <p>Nicolas Chomel</p>
                    <p>A réalisé 200 voeux</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="" class="f1_container">
                <div class="f1_card">
                  <div class="front face">
                    <img src="http://lorempixel.com/98/98" />                
                  </div>
                  <div class="back face center">
                    <p>Nicolas Chomel</p>
                    <p>A réalisé 200 voeux</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="" class="f1_container">
                <div class="f1_card">
                  <div class="front face">
                    <img src="http://lorempixel.com/98/98" />                
                  </div>
                  <div class="back face center">
                    <p>Nicolas Chomel</p>
                    <p>A réalisé 200 voeux</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="" class="f1_container">
                <div class="f1_card">
                  <div class="front face">
                    <img src="http://lorempixel.com/98/98" />                
                  </div>
                  <div class="back face center">
                    <p>Nicolas Chomel</p>
                    <p>A réalisé 200 voeux</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="" class="f1_container">
                <div class="f1_card">
                  <div class="front face">
                    <img src="http://lorempixel.com/98/98" />                
                  </div>
                  <div class="back face center">
                    <p>Nicolas Chomel</p>
                    <p>A réalisé 200 voeux</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="" class="f1_container">
                <div class="f1_card">
                  <div class="front face">
                    <img src="http://lorempixel.com/98/98" />                
                  </div>
                  <div class="back face center">
                    <p>Nicolas Chomel</p>
                    <p>A réalisé 200 voeux</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="" class="f1_container">
                <div class="f1_card">
                  <div class="front face">
                    <img src="http://lorempixel.com/98/98" />                
                  </div>
                  <div class="back face center">
                    <p>Nicolas Chomel</p>
                    <p>A réalisé 200 voeux</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="" class="f1_container">
                <div class="f1_card">
                  <div class="front face">
                    <img src="http://lorempixel.com/98/98" />                
                  </div>
                  <div class="back face center">
                    <p>Nicolas Chomel</p>
                    <p>A réalisé 200 voeux</p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div> 
      </div> 