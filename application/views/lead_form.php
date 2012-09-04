<?php $form->html(); ?>
<?php $form->view()->attr('action', \Request::$current->uri().'#lead-form-anchor'); ?>
<div class="row">
	<div id="lead-form" class="<?=$full ? 'span12' : 'span8'?>">
		<div id="lead-form-anchor" class="span4"></div>
		<div class="span4 contact-well">
			<div class="padded padded-top">
				<h3>Inquire online today</h3>
				<p>Please fill out the inquiry form, or contact us below using traditional methods.</p>
				<table>
					<tr>
						<td class="align-top"><h4>Address:&nbsp;</h4></td>
						<td class="align-top">
							<span>3400 North Ashton Blvd Ste 110</span><br />
							<span>Lehi, Utah 84043</span>
						</td>
					</tr>
					<tr>
						<td class="align-top"><h4>Phone:&nbsp;</h4></td>
						<td class="align-top">(888) 694-2872</td>
					</tr>
					<tr>
						<td class="align-top"><h4>Email:&nbsp;</h4></td>
						<td class="align-top"><a href="mailto:info@matrix42.com">info@matrix42.com</a></td>
					</tr>
				</table>
			</div>
		</div><!-- contact-well -->
		<div class="<?=$full ? 'span8' : 'span4'?> contact-form">
			<div class="row padded-top">
				<?php if($complete): ?>
				<div class="span8">
					<h2 class="padded-content">Your inquiry has been submitted</h2>
					<p class="padded-content">You will be contacted shortly in regards to your request.</p>
				<?php if($lead_download): ?>
					<div class="well padded">
						<h3 class="emphasis">To begin your download click the following...</h3>
						<a href="<?=$lead_download?>" class="btn btn-primary btn-large btn-icon"><span class="icon download"></span>Download Now!</a>
					</div>
				<?php endif; ?>
				</div>
				<?php else: ?>
				<?=$form->view()->open()?>
				<?=$form->campaign_id->render()?>
				<div class="span4">
					<div class="padded">
						<?=$form->name->render()?>
						<?=$form->email->render()?>
						<?=$form->number->render()?>
					</div>
				</div>
				<div class="span4">
					<div class="padded">
						<?=$form->message->render()?>
						<?=$form->submit->render()?>
					</div>
				</div>
				<?=$form->view()->close()?>
				<?php endif; ?>
			</div>
		</div><!-- contact-form -->
		<div class="clear"></div>
	</div><!-- lead-form -->
</div><!-- row -->