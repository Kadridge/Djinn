<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
        <link rel="stylesheet/less" href="<?php echo $this->Html->url('/css/bootstrap.less'); ?>">
        <?php echo $this->Html->script('less'); ?>
        <style>
        body{margin:0;}
          #containermasory{margin:0 auto;}
          .navbar .brand{padding:3px 20px 0 20px;}
          /***** BOX *****/
          .box{
            margin: 10px;
            background: #fff;
            float: left;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            width:300px;
            border: 1px solid #cddddb;
            box-shadow(0 1px 2px rgba(205, 221, 219, 0.37));
            height:auto;
            display:block;
          }
          .box header{border-radius:5px 5px 0 0;padding:10px 10px 0 10px;}
          .box h3{
            font-weight:normal;
            margin-bottom:10px;
            color:#0683B2;
            font-size:1.2em;
          }
          .box p {
            color:#666;
            display:block;
            padding-left:10px;
            padding-right:10px;
          }
          .box img{width: auto;
                    height:auto;
                    border: none;
                    -o-box-shadow: none;
                    -moz-box-shadow: none;
                    -khtml-box-shadow: none;
                    box-shadow: none;
                    display:block;
                    
                  }
                  img.smallAvatar {
                    padding: 0 0.3em 0 0.2em;
                    vertical-align: text-bottom;
                    margin: 0;
                    width: 20px;
                    height: 20px;
                    -moz-opacity: 0.8;
                    -khtml-opacity: 0.8;
                    -webkit-opacity: 0.8;
                    -ms-filter: progid:DXImageTransform.Microsoft.Alpha(opacity=(40));
                    filter: alpha(opacity = (40));
                    opacity: 0.8;
                    -webkit-transition: all 300ms ease-out;
                    -moz-transition: all 300ms ease-out;
                    transition: all 300ms ease-out;
                    -webkit-transition: 300ms;
                    -moz-transition: 300ms;
                    -ms-transition: 300ms;
                    -o-transition: 300ms;
                    transition: 300ms;
                    display:inline-block;
                    margin-right:10px;
                  }
              .box:focus img.smallAvatar, .box:hover img.smallAvatar {
              -moz-opacity: 1;
              -khtml-opacity: 1;
              -webkit-opacity: 1;
              -ms-filter: progid:DXImageTransform.Microsoft.Alpha(opacity=(100));
              filter: alpha(opacity = (100));
              opacity: 1;
              }
              .profile{padding: 0 10px 0 10px}
              .profile a{color: #666;text-decoration:none;}
              .box:focus .profile a, .box:hover .profile a {
              color: #666;
              }
              .popularity{ 
                text-align: right;
                margin: 0 4px 5px 10px;
                padding:0 10px 0 10px;
              }
              .popularity span{padding-left:4px;}
              .comments{background: whiteSmoke;border-radius:5px}
              .comment{padding:10px;border-bottom: #E1E1E1 solid 1px;border-top:1px solid #fff;min-height:20px;}
              .comment img{float:left;margin-right:10px;border-radius:2px;}
              .comment p {width:270px;margin-bottom:0}
              .comments a{color:#666;font-weight:bold;}
              .comments .comment:first-child{background-color:#e5eff6;}
              .comments .comment:first-child p{color:#333}
              .comments .comment:first-child a{background-color:#e5eff6;color:#333;font-weight:bold;}
              .see-more-comments{text-align:center;}
              .see-more-comments a{color:#333}

              .img-bloc {padding-left:10px;padding-right:10px;position:relative;margin-bottom:6px;}

              .help-wish{position:absolute;top:6px;left:16px;background-color:rgba(255,255,255,0.6);border-radius:5px;padding:4px;display:none;cursor:pointer;}
              .box:focus .help-wish, .box:hover .help-wish{display:block;}
              .help-wish:hover,.help-wish:focus{background-color:rgba(255,255,255,0.8);}

              .like-wish{position:absolute;top:6px;left:80px;background-color:rgba(255,255,255,0.6);border-radius:5px;padding:4px;display:none;cursor:pointer}
              .box:focus .like-wish, .box:hover .like-wish{display:block;}
              .like-wish:hover,.like-wish:focus{background-color:rgba(255,255,255,0.8);}

              .comment-wish{position:absolute;top:6px;left:179px;background-color:rgba(255,255,255,0.6);border-radius:5px;padding:4px;display:none;cursor:pointer}
              .box:focus .comment-wish, .box:hover .comment-wish{display:block;}
              .comment-wish:hover,.comment-wish:focus{background-color:rgba(255,255,255,0.8);}

          #sign-up{
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            text-shadow: -1px -1px 0 rgba(0, 0, 0, 0.4);
            -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2), 0 20px 15px rgba(255, 255, 255, 0.2) inset;
            -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.2), 0 20px 15px rgba(255,255,255,0.2) inset;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2), 0 20px 15px rgba(255, 255, 255, 0.2) inset;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            background-color: #2E9FBE;
            margin-top:8px;
            margin-left:40px;
            margin-right:10px;
            color : #fff;padding : 4px 10px 4px;}
          #research{padding-top : 8px;}

          .span3 h2{text-shadow:1px 1px 1px rgba(255,255,255,0.8);font-weight:normal;font-size:1.4em;color:#628e07;}
          .span3 header{margin-bottom:20px;}

          /****Back to top*****/
          #back-top {
            position: fixed;
            bottom: 30px;
            right:30px;
          }

          #back-top a {
            width: 108px;
            display: block;
            text-align: center;
            font: 11px/100% Arial, Helvetica, sans-serif;
            text-transform: uppercase;
            text-decoration: none;
            color: #bbb;

            /* transition */
            -webkit-transition: 1s;
            -moz-transition: 1s;
            transition: 1s;
          }
          #back-top a:hover {
            color: #000;
          }

          /* arrow icon (span tag) */
          #back-top span {
            width: 108px;
            height: 108px;
            display: block;
            margin-bottom: 7px;
            background: rgba(158,196,79,0.6) url(img/up-arrow.png) no-repeat center center;

            /* rounded corners */
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            border-radius: 15px;

            /* transition */
            -webkit-transition: 1s;
            -moz-transition: 1s;
            transition: 1s;
          }
          #back-top a:hover span {
            background-color: rgba(158,196,79,0.9);
          }
          /*Footer*/
          footer{background:#353535;padding: 30px 0;
            box-shadow: inset 0 1px 10px rgba(0, 0, 0, 0.3);
            margin: 40px 0 0;color:#fff}
                    footer p{text-align:center;}
        </style>
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">

      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
        <a class="brand" href="#">Administration<?php echo $this->Html->image('logo.png'); ?></a>
        <div class="nav-collapse">
        <ul class="nav">
            <li><?php echo $this->Html->link("Gestion des pages", array('action'=>'index', 'controller'=>'pages')); ?></li>
            <li><?php echo $this->Html->link("Gestion des articles", array('action'=>'index', 'controller'=>'posts')); ?></li>
            <li><?php echo $this->Html->link("Gestion des catégories", array('action'=>'index', 'controller'=>'categories')); ?></li>
            <li><?php echo $this->Html->link("Gestion des utilisateurs", array('action'=>'index', 'controller'=>'users')); ?></li>
            <li><?php echo $this->Html->link("Retourner au site", '/'); ?></li>
            <li><?php echo $this->Html->link("Se déconnecter", array('controller'=>'users', 'action'=>'logout', 'admin'=>false)); ?></li>
        </ul>
      </div><!--/.nav-collapse -->

    </div>
  </div>
</div>

<div class="container-fluid">

    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>
    
</div><!--/.fluid-container-->
<footer>
  <div class="container-fluid">
    <p>&copy; Djinn 2012</p>
  </div>
</footer>
</body>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<?php echo $this->Html->script('bootstrap-dropdown'); ?>
<?php echo $this->Html->script('masonry'); ?>
<?php echo $this->Html->script('main'); ?>
<?php echo $this->element('sql_dump'); ?>
    <?php echo $this->Html->script('admin'); ?>
    <?php echo $scripts_for_layout; ?>
</html>
