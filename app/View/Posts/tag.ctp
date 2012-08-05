    <div class="container all-wish">
    <div class="subnav subnav-fixed">
        <ul class="nav nav-pills">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Toutes les cat√©gories<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="active"><a href="#">Toutes les cat√©gories</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Musique</a></li>
              <li><a href="#">Sport</a></li>
              <li><a href="#">Voyage</a></li>
              <li><a href="#">Musique</a></li>
              <li><a href="#">Technologie</a></li>
            </ul>
          </li>   
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Les plus r√©cents<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="active"><a href="#"><i class="icon-time"></i>Les plus r√©cents</a></li>
              <li><a href="#"><i class="icon-random"></i>Al√©atoire</a></li>
              <li><a href="#"><i class="icon-heart"></i>Les plus populaires</a></li>
              <li><a href="#"><i class="icon-eye-open"></i>Les plus vus</a></li>
              <li><a href="#"><i class="icon-comment"></i>Les plus coment√©s</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="active"><a href="#">Tous le temps</a></li>
              <li><a href="#">Aujourd'hui</a></li>
              <li><a href="#">Cette semaine</a></li>
              <li><a href="#">Ce mois-ci</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <form>
                <select class="span3">
                  <option>Choisir une r√©gion</option>
                  <option>Ile de France</option>
                  <option>Paca</option>
                  <option>Rhone alpe</option>
                  <option>Nord pas de calais</option>
                  <option>Gironde</option>
                </select>
                <button type="submit" class="btn">Appliquer</button>
              </form>
            </ul>
          </li>            
        </ul>
      </div>
      <div class="row">
        <div class="span12">
        <div class="container-wish">
            <?php foreach ($posts as $k => $v): ?>
          <div class="box">
            <div class="title">
              <h3><?php echo $v['Post']['name']; ?></h3>
            </div>
              <div class="img-bloc">
                <a href="" class="help-wish" rel="tipsy" data-original-title="Je réalise le souhait"><i class="icon-thumbs-up"></i></a>
                <a href="" class="like-wish" rel="tipsy" data-original-title="Je soutiens"><i class="icon-heart"></i></a>
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
                 <div class="icons-stat">100000 <i class="icon-eye-open"></i></div><!-- whitespace
--><div class="icons-stat">10 <i class="icon-heart"></i></div><!-- whitespace
--><div class="icons-stat">100 <i class=" icon-comment"></i></div>
              </div>
          </div>
            <?php endforeach; ?>
        </div>
        </div>
      </div>
    </div>