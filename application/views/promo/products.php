<div class="row-fluid">
<?php foreach($products as $product): ?>
	<div class="product well dark">
		<img src="/assets/img/promo/<?=$product->logo?>" class="left thumbnail" alt="<?=$product->name?>" />
		<h3 class="emphasis"><?=$product->name?></h3>
		<p><?=$product->description?></p>
		<a href="<?=$product->webinar_link?>" target="_webinar" class="btn btn-inverse btn-mini btn-icon right"><span class="icon meeting"></span><?=__('webinar')?></a>
		<a href="/assets/uploads/<?=$product->pdf?>" class="btn btn-info btn-mini btn-icon right"><span class="icon pdf"></span><?=__('data sheet')?></a>
		<a href="#" class="btn btn-primary btn-mini btn-icon right"><span class="icon download"></span><?=__('free trial')?></a>
		<div class="clear"></div>
	</div>
<?php endforeach; ?>
</div><!-- row-fluid -->