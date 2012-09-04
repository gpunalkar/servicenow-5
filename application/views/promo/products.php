<div class="row-fluid">
	<h1>Matrix42 Add-Ons</h1>
<?php foreach($products as $product): ?>
	<div class="product well dark">
		<img src="/assets/img/promo/<?=$product->logo?>" class="left thumbnail" alt="<?=$product->name?>" />
		<h3 class="emphasis"><?=$product->name?></h3>
		<p><?=$product->description?></p>
	<?php if($product->webinar_link): ?>
		<a href="<?=$product->webinar_link?>" target="_webinar" class="btn btn-inverse btn-mini btn-icon right"><span class="icon meeting"></span><?=__('Webinar')?></a>
	<?php endif; ?>
	<?php if($product->pdf): ?>
		<a href="/assets/uploads/<?=$product->pdf?>" class="btn btn-info btn-mini btn-icon right"><span class="icon pdf"></span><?=__('Data Sheet')?></a>
	<?php endif; ?>
		<a href="#lead-form-anchor" class="btn btn-primary btn-mini btn-icon right scroll main-lead" data-campaign="<?=$product->campaign_id?>" data-message="<?=$product->campaign->description?>"><span class="icon download"></span><?=__('Free Trial')?></a>
		<div class="clear"></div>
	</div>
<?php endforeach; ?>
</div><!-- row-fluid -->