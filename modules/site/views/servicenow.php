<?php
/**
 * @author jeffn
 * @date 03/20/2012
 * @brief
 *
 */
defined('SYSPATH') OR die('No direct access allowed.');
?>
<!DOCTYPE html>
<html lang="<?=\Helper::language()?>">
<head>
	<meta charset="utf-8" />
	<?php if($page_title != $title): ?>
	<?php $title_string = $title.' | '.$page_title; ?>
	<?php else: ?>
	<?php $title_string = $title; ?>
	<?php endif; ?>
	<title><?=substr($title_string, 0, 254)?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="<?=$description?>" />
	<meta name="keywords" content="<?=$keywords?>" />
	<meta name="author" content="Matrix42" />
	<link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon" />
	<script type="text/javascript" src="http://use.typekit.com/dqk5yrb.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<?=Request::$current->scripts()?>
	<link href="/assets/css/bootstrap.css" rel="stylesheet" />
	<?=Request::$current->styles()?>
	<?=$head_analytics->render()?>
</head>
<body>
<?=$header?>
<div id="main-container" class="container rel">
	<div id="main-row" class="row">
		<?=$banner?>
		<?=$nav?>
		<?php if($sidebar): ?>
		<?php if($sidebar_loc == "left"): ?>
			<div id="sidebar" class="span3">
				<?=$sidebar?>
			</div>
			<div id="body-content" class="span9">
				<?=$content?>
			</div>
			<?php else: ?>
			<div id="body-content" class="span9">
				<?=$content?>
			</div>
			<div id="sidebar" class="span3">
				<?=$sidebar?>
			</div>
			<?php endif; ?>
		<?php else: ?>
		<?=$content?>
		<?php endif; ?>
		<div class="span12">
			<?=$lead_form?>
		</div><!-- span12 -->
	</div><!-- main-row -->
</div><!-- main-container -->
<div id="footer" class="container">
	<?=$footer?>
</div><!-- footer -->
<?php if($modal): ?>
	<?=$modal?>
	<?php endif; ?>
<?=$foot_analytics->render()?>
</body>
</html>