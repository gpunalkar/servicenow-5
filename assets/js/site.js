$(document).ready(function() {
	$(document).pngFix();

	if(window.location.href.indexOf("#side-lead-form-anchor") > -1) {
		$('#side-lead-formc').show();
	}

	if(window.location.href.indexOf("#lead-form-anchor") > -1) {
		$('#main-lead-form').show();
	}

	$(".sidebar-lead").click(function(event){
		event.preventDefault();
		var campaign_id = $(this).attr('data-campaign');
		$('#sidelead-campaign_id').val(campaign_id);
		//hide the other form on the page
		$('#main-lead-form').hide();
		if($('#side-lead-formc').hasClass('hidden')) {
			$('#side-lead-formc').slideDown().fadeIn();
		}
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
	});

	$(".main-lead").click(function(event){
		event.preventDefault();


		if($('#lead-close').attr('data-reload') == 1)
		{
			window.location = '/lead_form/lead-form-anchor';
		}
		$('#lead-campaign_id').val($(this).attr('data-campaign'));
		$('#lead-message').val($(this).attr('data-message'));
		//hide the other form on the page
		$('#side-lead-formc').hide();
		if($('#main-lead-form').is(":hidden")) {
			$('#main-lead-form').slideDown().fadeIn();
			$('#main-lead-form').removeClass('hidden');
			$('#lead-form').show();

		}
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
	});

	$('a[data-toggle=modal]').click(function(event) {
		$('#modal-title').html($(this).attr('data-title'));
		$('#modal-body').load($(this).attr('href'), function() {
			$('#modal').modal({
				backdrop: true,
				show: true
			}).css({
					width: 'auto',
					'margin-left': function () {
						return -($(this).width() / 2);
					}
				});
		});
		event.preventDefault();
	});

	$('#modal .submit-button').click(function() {
		$('#modal form').submit();
	});

	$('#modal form').live('submit', function() {
		$(this).ajaxSubmit({
			target: '#modal-body',
			type: 'post',
			success: function(r){
				obj = $.parseJSON(r);
				if(obj.success == true)
				{
					$('#modal').modal('hide');
					window.location.href = '/thank_you';
				}
			}
		});
		return false;
	});

	$('#lead-close').click(function(){
		if($(this).attr('data-reload')) {
			window.location = '/lead_form';
		} else {
			$('#main-lead-form').hide();
		}
	});
});
