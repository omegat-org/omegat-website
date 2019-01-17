$(function () {
	$("#donate-button").click(function(ev){
		$("#donation-form").submit();
	});
	var donationSlider = $('#donation-slider');
	donationSlider.rangeslider({
		polyfill: false,
		onInit: function () {
			$("#amount").val(donationSlider[0].value);
		},
		// Callback function
		onSlide: function (position, value) {
			$("#amount").val(value);
		}
	});
});