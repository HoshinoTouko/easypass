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
<div class="row">
<div class="col-sm-12">
<h1>EasyPass</h1>
<h6>- manage your password by using ONLY ONE pass</h6>
</div>
</div>
<div class="row">
<div class="form palette palette-clouds col-sm-12">

<div class="form-group">
<p>Origin password</p>
<input type="password" class="form-control login-field" value="" placeholder="Password" id="origin-pass">
</div>
<div class="form-group">
<p>Additional string 1 (Recommended)</p>
<input type="text" class="form-control login-field" value="" placeholder="Maybe the domain of the website" id="add-1">
</div>
<div class="form-group">
<p>Additional string 2 (Optional)</p>
<input type="text" class="form-control login-field" value="" placeholder="Maybe the username of the website" id="add-2">
</div>
<div class="form-group">
<p>Additional string 3 (Optional)</p>
<input type="text" class="form-control login-field" value="" placeholder="Other indo as you like" id="add-3">
</div>
<a class="btn btn-primary btn-lg btn-block" href="#">Generate</a>
</div>
</div>

</div>

<br><br>

<footer class="palette-midnight-blue">
<div class="container">
<div class="row">

<div class="col-xs-7">
<h3 class="footer-title">About</h3>
<p>Do you like this freebie? Want to get more stuff like this?<br>
Subscribe to designmodo news and updates to stay tuned on great designs.<br>
Go to: <a href="http://designmodo.com/flat-free" target="_blank">designmodo.com/flat-free</a>
</p>

<p class="pvl">
<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://designmodo.com/flat-free/" data-text="Flat UI Free - PSD&amp;amp;HTML User Interface Kit" data-via="designmodo">Tweet</a>
<script id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<iframe src="http://ghbtns.com/github-btn.html?user=designmodo&amp;repo=Flat-UI&amp;type=watch&amp;count=true" height="20" width="107" frameborder="0" scrolling="0" style="width:105px; height: 20px;" allowtransparency="true"></iframe>
<iframe src="http://ghbtns.com/github-btn.html?user=designmodo&amp;repo=Flat-UI&amp;type=fork&amp;count=true" height="20" width="107" frameborder="0" scrolling="0" style="width:105px; height: 20px;" allowtransparency="true"></iframe>
<iframe src="http://ghbtns.com/github-btn.html?user=designmodo&amp;type=follow&amp;count=true" height="20" width="195" frameborder="0" scrolling="0" style="width:195px; height: 20px;" allowtransparency="true"></iframe>
</p>

<a class="footer-brand" href="http://designmodo.com" target="_blank">
<img src="docs/assets/img/footer/logo.png" alt="Designmodo.com">
</a>
</div> <!-- /col-xs-7 -->


<div class="col-xs-5">
<div class="footer-banner">
<h3 class="footer-title">Get Flat UI Pro</h3>
<ul>
<li>Tons of Basic and Custom UI Elements</li>
<li>A Lot of Useful Samples</li>
<li>More Vector Icons and Glyphs</li>
<li>Pro Color Swatches</li>
<li>Bootstrap Based HTML/CSS/JS Layout</li>
</ul>
Go to: <a href="http://designmodo.com/flat" target="_blank">designmodo.com/flat</a>
</div>
</div>
</div>
</div>
</footer>

<!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
<script src="<?php echo RESOURCE; ?>/Flat-UI/js/vendor/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo RESOURCE; ?>/Flat-UI/js/vendor/video.js"></script>
<script src="<?php echo RESOURCE; ?>/Flat-UI/js/flat-ui.min.js"></script>

</body>
</html>