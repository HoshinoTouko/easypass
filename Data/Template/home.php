<?php
if(!defined('ROOT_PATH')) exit('This file could not be access directly.');
/**
* Created by PhpStorm.
* User: touko
* Date: 16-8-25
* Time: 下午6:10
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo SITE_NAME; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Loading Bootstrap -->
<link href="<?php echo RESOURCE; ?>/Flat-UI/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Loading Flat UI -->
<link href="<?php echo RESOURCE; ?>/Flat-UI/css/flat-ui.min.css" rel="stylesheet">

<link rel="shortcut icon" href="img/favicon.ico">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
<script src="<?php echo RESOURCE; ?>/Flat-UI/js/vendor/html5shiv.js"></script>
<script src="<?php echo RESOURCE; ?>/Flat-UI/js/vendor/respond.min.js"></script>
<![endif]-->
</head>
<body>

<div class="row demo-row">
<div class="col-xs-12">
<nav class="navbar navbar-inverse navbar-embossed" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
<span class="sr-only">Toggle navigation</span>
</button>
<a class="navbar-brand" href="#">Easy Pass</a>
</div>
<div class="collapse navbar-collapse" id="navbar-collapse-01">
<ul class="nav navbar-nav navbar-left">
<li><a href="#fakelink">Home</a></li>
<li><a href="#fakelink">About</a></li>
</ul>

<ul class="nav navbar-nav navbar-right">
<li><a href="#fakelink"><span class="fui-github"></span> Github</a></li>
</ul>


</div><!-- /.navbar-collapse -->
</nav><!-- /navbar -->
</div>
</div>

<div class="container">
<h1>EasyPass</h1>
<h6> - manage your password by using ONE pass</h6>
</div>
<!-- /.container -->


<!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
<script src="<?php echo RESOURCE; ?>/Flat-UI/js/vendor/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo RESOURCE; ?>/Flat-UI/js/vendor/video.js"></script>
<script src="<?php echo RESOURCE; ?>/Flat-UI/js/flat-ui.min.js"></script>

</body>
</html>