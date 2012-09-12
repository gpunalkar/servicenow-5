<table style="border-width: 0px;" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody>
	<tr>
		<td>Name:</td>
		<td><?=$lead->full_name?></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><?=$lead->email?></td>
	</tr>
	<tr>
		<td>Phone Number:</td>
		<td><?=$lead->get_phone()->number?></td>
	</tr>
	<tr>
		<td>Company Name:</td>
		<td><?=$lead->business_name?></td>
	</tr>
	<tr>
		<td>Inquiry IP:</td>
		<td><?=$lead->inquiry_ip?></td>
	</tr>
	<tr>
		<td>Inquiry Time:</td>
		<td><?=$lead->inquiry_date?></td>
	</tr>
	<tr>
		<td>Campaign Code:</td>
		<td><?=$lead->campaign->campaign_code?></td>
	</tr>
	<tr>
		<td>Campaign:</td>
		<td><?=$lead->campaign->name?></td>
	</tr>
	<tr>
		<td>Campaign Info:</td>
		<td><?=$lead->campaign->description?></td>
	</tr>
	<tr>
		<td>Inquiry:</td>
		<td><?=$lead->get_note()->note?></td>
	</tr>
	</tbody>
</table>