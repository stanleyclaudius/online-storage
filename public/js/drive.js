$(document).ready(function() {
	$('#staricon').mouseover(function() {
		$('#changestar').attr('src', "/icon/file_container/star-color.png");
	});
	$('#staricon').mouseleave(function() {
		$('#changestar').attr('src', "/icon/file_container/star-black.png");
	});

	$('#trashicon').mouseover(function() {
		$('#changetrash').attr('src', "/icon/file_container/trash-color.png");
	});
	$('#trashicon').mouseleave(function() {
		$('#changetrash').attr('src', "/icon/file_container/trash-black.png");
	});

	$('#downloadicon').mouseover(function() {
		$('#downloadchange').attr('src', "/icon/file_container/download-color.png");
	});
	$('#downloadicon').mouseleave(function() {
		$('#downloadchange').attr('src', "/icon/file_container/download-black.png");
	});

	$('#file').on('change', function(e) {
		let fileName = e.target.files[0].name;
		$('.filelabel').html(fileName);
		$('.uploadfilebutton').attr('for', '');
		$('form').submit();
	});
});