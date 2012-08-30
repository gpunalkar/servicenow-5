<div class="row-fluid">
<?php foreach($promotions as $promo): ?>
	<div class="span4 well plastic center package">
		<h3><?=$promo->name?></h3>
		<h6 class="secondary"><?=__('Package')?></h6>
		<h1 class="price<?=strlen($promo->promo_price) > 1 ? ' squeeze' : ''?>"><span class="monetary"><?=__('$')?></span><?=$promo->promo_price?></h1>
		<span class="per-device"> /<?=__('device')?></span>
		<div class="clear"></div>
		<div class="align-left">
			<p><?=$promo->description?></p>
		</div><!-- align-left -->
		<a href="/order/<?=$promo->id?>" id="promo-<?=$promo->id?>-btn" class="btn btn-primary btn-large" data-title="<?=$promo->name?> <?=__('Order')?>" data-toggle="modal"><?=__('Order')?>!</a>
	</div><!-- span4 -->
<?php endforeach; ?>
</div><!-- row-fluid -->