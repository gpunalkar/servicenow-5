<?php
/**
 * @author Nezzy
 * @date 3/12/2012
 * @brief
 *
 */
$home_url = \Helper::language() === 'de' ? 'http://www.matrix42.de' : 'http://www.matrix42.com';
?>
<!-- Begin Header -->
<div id="main-nav" class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<div class="row-fluid">
				<div id="logo" class="span3">
					<a href="<?=$home_url?>"><img src="/assets/img/promo/matrix42-logo.png" alt="Matrix42" /></a>
				</div><!-- logo -->
				<div id="title-phrase" class="span7">
					<h1 class="inverse"><?=__('Matrix42 Add-Ons Promo')?></h1>
					<h4 class="secondary"><?=__('Extend Your Matrix42 Capabilities')?></h4>
				</div><!-- title-phrase -->
				<div class="right rel">
					<div id="exclusive-label" class="center">
						<h3><?=__('Exclusive for')?></h3>
						<h4>Matrix42</h4>
						<h4><?=__('Customers')?></h4>
					</div>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- navbar-inner -->
</div><!-- main-nav -->