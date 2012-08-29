<?php $form->html(); ?>
<?php $form->view()->attr('action', \Request::$current->url().'#lead-form-anchor'); ?>
<div class="row-fluid"><div id="lead-form-anchor" class="span6"></div></div>
<div class="promo-form">
	<div class="row-fluid">
		<?php if($complete): ?>
		<div class="span6">
			<h2 class="padded-content">Your inquiry has been submitted</h2>
			<p class="padded-content">You will be contacted shortly in regards to this promotion.</p>
		</div>
		<?php else: ?>
		<?=$form->view()->open()?>
		<?=$form->campaign_id->render()?>
		<div class="span6">
			<?=$form->name->render()?>
			<?=$form->email->render()?>
			<?=$form->number->render()?>
		</div>
		<div class="span5">
			<?=$form->addons->render()?>
			<?=$form->submit->render()?>
		</div>
		<?=$form->view()->close()?>
		<?php endif; ?>
	</div><!-- row -->
</div><!-- contact-form -->