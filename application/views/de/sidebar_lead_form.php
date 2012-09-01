<?php $form->html(); ?>
<?php $form->view()->attr('action', \Request::$current->uri().'#side-lead-form-anchor'); ?>
<div id="side-lead-form" class="row-fluid">
	<?php if($complete): ?>
	<div class="span12">
		<h2 class="emphasis"><span class="icon checkmark"></span>Vielen Dank!</h2>
		<h3>Ihre Anfrage ist eingegangen.</h3>
		<p>Sie werden in Kürze bezüglich Ihrer Anfrage kontaktiert werden.</p>
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