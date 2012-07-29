<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
    <?php echo $title_for_layout; ?>
  </title>
        <link rel="alternate" type="application/rss+xml" title="Djinn" href="<?php echo $this->Html->url(array('controller'=>'posts','action'=>'feed','ext'=>'rss')); ?>"></link>
        <link rel="stylesheet/less" href="<?php echo $this->Html->url('/css/bootstrap.less'); ?>"></link>
        <?php echo $this->Html->script('less'); ?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
  </head>

  <body>
    <?php echo $this->element('menu'); ?>

    <?php echo $this->fetch('content'); ?>
      <footer id="footer">
        <div class="container">
          <ul>
            <li><a href="">A propos</a></li>
            <li><a href="">L'équipe</a></li>
            <li><a href="">Confidentialité</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Contact</a></li>
          </ul>
          <div id="legal">© Djinn 2012</div>
        </div>
      </footer>
    <!-- Le javascript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/canHazSlider.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
