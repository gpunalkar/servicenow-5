$(document).ready(function() {

	if($('#promotion-id').text() == 3)
	{
		$('form input:checkbox').attr('checked', true);
	}

	if($('form #order-devices').val().length > 0)
	{
		alert($('form #order-devices').val());
		update_estimate($('form #order-devices'));
	}

	$('form #order-devices').keyup(function() {
		update_estimate(this);
	});

});

function update_estimate(obj) {
	var reg_price = $('#regular-price').text();
	var promo_price = $('#promotion-price').text();
	var monetary = $('#monetary').text();
	var devices = $(obj).val();

	var estimate = (devices*promo_price);
	var original = (devices*reg_price);
	var savings = (original-estimate);

	$('form #order-estimate').val(monetary+estimate.toFixed(2));
	$('form #order-price_estimate').val(estimate.toFixed(2)).attr('value', estimate.toFixed(2));
	$('#pre-price').html(monetary+original.toFixed(2)+' package price');
	$('#discount').html('-('+monetary+savings.toFixed(2)+') [promotional savings]<hr />');
}