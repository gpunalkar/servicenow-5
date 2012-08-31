<?php $form->html(); ?>
<div class="container">
	<div class="row-fluid">
	<?=$form->view()->open()?>
		<div class="well order-well span4">
			<span id="promotion-price" class="hidden"><?=$promotion->promo_price?></span>
			<span id="regular-price" class="hidden"><?=$promotion->reg_price?></span>
			<span id="promotion-id" class="hidden"><?=$promotion->id?></span>
			<span id="monetary" class="hidden"><?=__('$')?></span>
			<?=$form->name->render()?>
			<?=$form->company->render()?>
			<?=$form->email->render()?>
			<?=$form->number->render()?>
		</div><!-- span4 -->
		<div class="well order-well dark span4">
			<?=$form->devices->render()?>
			<h6 class="disclaimer"><?=__('Required to calculate estimate')?></h6>
			<?=$form->addons->render()?>
			<?=$form->promotion_id->render()?>
			<?=$form->campaign_id->render()?>
		</div><!-- span4 -->
		<div class="well order-well span4">
			<?=$form->partner->render()?>
			<h6 id="pre-price"></h6>
			<h6 id="discount"></h6>
			<?=$form->estimate->render()?>
			<h6 class="disclaimer">*<?=__('This is only an estimated price. Be sure to consult your sales representative for a more accurate pricing guide as other fees and taxes may apply.')?></h6>
		</div><!-- span4 -->
	<?=$form->view()->close()?>
	</div><!-- row-fluid -->
</div><!-- container-fluid -->
<?php if(isset($scripts)): ?>
<?php foreach($scripts as $script): ?>
	<script type="text/javascript" src="/assets/js/<?=$script?>.js"></script>
<?php endforeach; ?>
<?php endif; ?>