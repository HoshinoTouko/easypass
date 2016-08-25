<?php
if(!defined('ROOT_PATH')) exit('This file could not be access directly.');
?>
<!DOCTYPE html>
<html>
<?php $code = $instance->getCode() ? $instance->getCode() : '500'; ?>
<head>
<meta charset="utf-8"/>
<title>Error - <?php echo $code; ?> - <?php echo SITE_NAME; ?></title>
<base href="<?php echo BASE_URL; ?>"/>
<meta name="Robots" content="NOINDEX, NOFOLLOW, NOARCHIVE"/>
<meta name="ViewPort" content="initial-scale=1, minimum-scale=1, width=device-width"/>
<link rel="stylesheet" href="Resource/Misc/Error.css">
</head>
<body>
<p class="title"><?php echo SITE_NAME; ?></p>
<div class="box">
<h2>System Error - <b><?php echo $code; ?></b></h2>
<p class="main selectable"><?php echo $instance->getMessage(); ?></p>
<p>We're now fixing this problem, sorry for the inconveniences.</p>
<?php if(defined('DEBUG_ENABLE') && DEBUG_ENABLE) { ?>
<pre>BackTrace:<br><?php echo $instance->formatBackTrace(); ?></pre>
<?php } ?>
</div>
<p class="foot">Powered by KK Framework</p>
</body>
</html>