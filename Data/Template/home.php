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
<link href="<?php echo RESOURCE; ?>/Flat-UI/css/flat-ui.css" rel="stylesheet">

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
<li><a href="https://github.com/HoshinoTouko/easypass">
<span class="fui-github"></span> Github</a>
</li>
</ul>


</div><!-- /.navbar-collapse -->
</nav><!-- /navbar -->
</div>
</div>

<div class="container">
<div class="row">
<div class="col-sm-12">
<h1>EasyPass</h1>
<h6>- manage your password by using ONLY ONE password</h6>
</div>
</div>

<div class="row">
<div class="form palette palette-clouds col-sm-12">

<div class="form-group" id="origin-pass-div">
<p>Origin password</p>
<input type="password" class="form-control" value="" placeholder="Password" id="origin-pass">
</div>

<a class="btn btn-primary btn-lg btn-block" id="generate">Generate</a>
<div class="form-group">
<p>Result</p>
<input type="text" class="form-control" placeholder="Your password here" id="result">
</div>

<h5 style="color: #2c3e50">Other settings</h5>
<div class="progress">
<div class="progress-bar" style="width: 30%;"></div>
</div>

<div class="form-group">
<p>Additional string 1 (Recommended)</p>
<input type="text" class="form-control" value="" placeholder="Maybe the domain of the website" id="add-1">
</div>
<div class="form-group">
<p>Additional string 2 (Optional)</p>
<input type="text" class="form-control" value="" placeholder="Maybe the username of the website" id="add-2">
</div>
<div class="form-group">
<p>Additional string 3 (Optional)</p>
<input type="text" class="form-control" value="" placeholder="Other info as you like" id="add-3">
</div>

<div class="form-group" id="length-div">
<p>Length</p>
<input type="text" class="form-control" value="12" placeholder="The length of your password" id="length">
</div>

<div class="form-group">
<p>Include</p>
<label class="checkbox" for="number">
<input type="checkbox" checked="checked" value="number" id="Number" data-toggle="checkbox" disabled="" class="custom-checkbox">
<span class="icons">
<span class="icon-unchecked"></span>
<span class="icon-checked"></span>
</span>
Number
</label>
<label class="checkbox" for="punctuation">
<input type="checkbox" value="punctuation" id="punctuation" data-toggle="checkbox" disabled="" class="custom-checkbox">
<span class="icons">
<span class="icon-unchecked"></span>
<span class="icon-checked"></span>
</span>
punctuation
</label>
</div>


</div>
</div>

</div>

<br><br>

<footer class="palette-midnight-blue">
<div class="container">
<div class="row">

<div class="col-xs-7">
<h3 class="footer-title">About</h3>
<p>Easy Pass is a simple online tool which help you
strengthen your password security<br>
You can use only one password, with the website's name to generate a random password
</p>


<a class="footer-brand" href="http://designmodo.com" target="_blank">
<img src="<?php echo RESOURCE; ?>/Flat-UI/img/footer/logo.png" alt="Designmodo.com">
</a>

</div> <!-- /col-xs-7 -->


<div class="col-xs-5">
<div class="footer-banner">
<h3 class="footer-title">Developed by</h3>
<ul>
<li>Touko</li>
<li>A</li>
<li>B</li>
</ul>
Go to: <a href="http://touko.moe" target="_blank">http://touko.moe</a>
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

<script src="<?php echo RESOURCE; ?>/easypass/home.js"></script>

</body>
</html>