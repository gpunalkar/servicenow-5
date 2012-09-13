<table style="border-width: 0px;" border="0" cellpadding="0" cellspacing="0" width="300">
	<thead>
	<tr>
		<th><?=__('Customer')?> <?=__('Detail')?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><strong><?=__('Full Name')?>:</strong></td>
		<td><?=$lead->full_name?></td>
	</tr>
	<tr>
		<td><strong><?=__('Email')?>:</strong></td>
		<td><?=$lead->email?></td>
	</tr>
	<tr>
		<td><strong><?=__('Phone Number')?>:</strong></td>
		<td><?=$lead->get_phone()->number?></td>
	</tr>
	<tr>
		<td><strong><?=__('Business Name')?>:</strong></td>
		<td><?=$lead->business_name?></td>
	</tr>
	<tr>
		<td><strong><?=__('Inquiry')?> IP:</strong></td>
		<td><?=$lead->inquiry_ip?></td>
	</tr>
	<tr>
		<td><strong><?=__('Inquiry Date')?>:</strong></td>
		<td><?=\Format::date($lead->inquiry_date, 'human')?></td>
	</tr>
	<tr>
		<td><strong><?=__('Campaign')?> Code:</strong></td>
		<td><?=$lead->campaign->campaign_code?></td>
	</tr>
	<tr>
		<td><strong><?=__('Campaign')?>:</strong></td>
		<td><?=$lead->campaign->name?></td>
	</tr>
	<tr>
		<td><strong><?=__('Campaign')?> <?=__('Description')?>:</strong></td>
		<td><?=$lead->campaign->description?></td>
	</tr>
	<tr>
		<td><strong><?=__('Referring Partner')?>:</strong></td>
		<td><?=$lead_order->partner?></td>
	</tr>
	</tbody>
</table>
<table style="border-width: 1px;" border="1" cellpadding="1" cellspacing="1" width="100%">
	<thead>
	<tr>
		<th colspan="3"><h3>New Order!</h3></th>
	</tr>
	<tr>
		<th><?=__('Product')?></th>
		<th><?=__('Devices')?></th>
		<th><?=__('Promotional Price')?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>
		<?php foreach($products as $product): ?>
			<span><strong><?=$product->sku?></strong> - <?=$product->name?> <span style="font-style: italic;font-size: 8px;">(<?=$product->type?>)</span></span><br />
		<?php endforeach; ?>
		</td>
		<td valign="top"><?=$lead_order->devices?></td>
		<td valign="top">@ <?=__('$')?><?money_format('%i', $lead_order->promotion->promo_price)?></td>
	</tr>
	<tr>
		<td colspan="2"><strong style="color: #ff4c00;"><?=__('Your Estimated Cost')?>:</strong></td>
		<td><?=__('$')?> <?=money_format('%i', $lead_order->price_estimate)?></td>
	</tr>
	</tbody>
</table>