$(document).ready(function() {
	for (let i = 1; i <= $('.faq').length; i++) {
		$('#faq' + i).click(function() {
			if ($('#faq' + i + '-content').hasClass('hidden')) {
				$('.faq-content').removeClass('block');
				$('.faq-content').addClass('hidden');
				$('.faq img').attr('src', "/icon/faq/down.png");
				$('#faq' + i + '-content').removeClass('hidden');
				$('#faq' + i + '-content').addClass('block');
				$('#faq' + i + ' img').attr('src', "/icon/faq/up.png");
			} else {
				$('#faq' + i + '-content').removeClass('block');
				$('#faq' + i + '-content').addClass('hidden');
				$('#faq' + i + ' img').attr('src', "/icon/faq/down.png");
			}
		});
	}
});