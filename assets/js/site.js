$(document).ready(function() {
	$(".scroll").click(function(event){
		event.preventDefault();
		if($('#main-lead-form').hasClass('hidden')) {
			$('#main-lead-form').slideDown().fadeIn();
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
					location.reload();
				}
			}
		});
		return false;
	});
});

	$(document).scroll(function(){
		// If has not activated (has no attribute "data-top"
		if (!$('.subnav').attr('data-top')) {
			// If already fixed, then do nothing
			if ($('.subnav').hasClass('subnav-fixed')) return;
			// Remember top position
			var offset = $('.subnav').offset();
			$('.subnav').attr('data-top', offset.top);
		}

		if ($('.subnav').attr('data-top') - $('.subnav').outerHeight() <= $(this).scrollTop())
			$('.subnav').addClass('subnav-fixed');
		else
			$('.subnav').removeClass('subnav-fixed');
	});
