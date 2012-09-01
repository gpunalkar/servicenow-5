<?php $form->html(); ?>
<?php $form->view()->attr('action', \Request::$current->uri().'#side-lead-form-anchor'); ?>
<div id="side-lead-form" class="row-fluid">
<div id="side-lead-form-anchor"></div>
	<?php if($complete): ?>
	<div class="span12">
		<h2 class="emphasis"><span class="icon checkmark"></span>Thank you!</h2>
		<h3>Your Inquiry has been received</h3>
		<p>You will be contacted shortly in regards to your request.</p>
	</div><!-- span12 -->
	<?php else: ?>
	<?=$form->view()->open()?>
	<?=$form->campaign_id->render()?>
	<div class="span6">
		<?=$form->name->render()?>
		<?=$form->email->render()?>
		<?=$form->number->render()?>
	</div><!-- span6 -->
	<div class="span5">
		<?=$form->message->render()?>
		<?=$form->submit->render()?>
	</div><!-- span6 -->
	<?=$form->view()->close()?>
	<?php endif; ?>
</div><!-- support -->