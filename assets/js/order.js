$(document).ready(function() {
	$('form #order-devices').blur(function() {
		var reg_price = $('#regular-price').text();
		var promo_price = $('#promotion-price').text();
		var monetary = $('#monetary').text();
		var devices = $(this).val();

		var estimate = (devices*promo_price);
		var original = (devices*reg_price);
		var savings = (original-estimate);

		$('form #order-estimate').val(monetary+estimate.toFixed(2));
		$('#pre-price').html(monetary+original.toFixed(2)+' package price');
		$('#discount').html('-('+monetary+savings.toFixed(2)+') [promotional savings]<hr />');
	});
});