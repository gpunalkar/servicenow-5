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
			<div class="row">
				<div id="logo" class="span2">
					<a href="<?=$home_url?>"><img src="/assets/img/matrix42-logo.png" alt="Matrix42" /></a>
				</div><!-- logo -->
				<div id="logo2" class="span2 offset8">
					<img src="/assets/img/servicenow-logo.png" alt="ServiceNow" />
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- navbar-inner -->
</div><!-- main-nav -->