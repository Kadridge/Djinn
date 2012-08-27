<div id="wish-comments-content">                         
            <ol class="commentlist">
                <?php foreach ($messages as $k => $v): ?>
              <li>
                <article class="clearfix">
                  <div class="avatar">
                    <img alt="" src="/Djinn/<?php echo $v['FirstUser']['dir']; ?>/thumb/profile/<?php echo $v['FirstUser']['filename']; ?>" class="avatar">       
                  </div>
                  <div class="comment-text">
                    <h4><?php echo $this->Html->link($v['FirstUser']['username'], array('controller' => 'users', 'action' => 'show', $v['FirstUser']['id'])); ?></h4>                                     
                    <p><?php echo $v['Message']['content']; ?></p>
                    <time datetime="2012-07-13"><small><?php echo $v['Message']['created']; ?></small></time>
                  </div>
                </article>
              </li>
              <?php endforeach; ?>
            </ol>
              <?php echo $this->Form->create('Message'); ?>
        <?php echo $this->Form->input('content', array('label'=>'Laisser un message')); ?>
        <?php echo $this->Form->input('session_id', array('type'=>'hidden', 'value'=> $this->params['pass'][0])); ?>
        <?php echo $this->Form->input('user_id', array('type'=>'hidden', 'value'=> AuthComponent::user('id'))); ?>
        <?php echo $this->Form->input('status', array('type'=>'hidden', 'value'=> 1)); ?>
        <?php echo $this->Form->input('userr_id', array('type'=>'hidden', 'value'=>$this->params['pass'][0] - AuthComponent::user('id'))); ?>
            <?php echo $this->Form->end('Envoyer'); ?>
          </div>