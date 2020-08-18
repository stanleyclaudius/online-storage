$(document).ready(function() {
	for (let i = 1; i <= $('.actionbutton').length; i++) {
		$('#downloadicon' + i).mouseover(function() {
			$('#downloadchange' + i).attr('src', "/icon/file_container/download-color.png");
		});

		$('#staricon' + i).mouseover(function() {
			$('#changestar' + i).attr('src', "/icon/file_container/star-color.png");
		});

		$('#trashicon' + i).mouseover(function() {
			$('#changetrash' + i).attr('src', "/icon/file_container/trash-color.png");
		});
	}

	for (let i = 1; i <= $('.actionbutton').length; i++) {
		$('#downloadicon' + i).mouseleave(function() {
			$('#downloadchange' + i).attr('src', "/icon/file_container/download-black.png");
		});

		$('#staricon' + i).mouseleave(function() {
			$('#changestar' + i).attr('src', "/icon/file_container/star-black.png");
		});

		$('#trashicon' + i).mouseleave(function() {
			$('#changetrash' + i).attr('src', "/icon/file_container/trash-black.png");
		});
	}

	$('#file').on('change', function(e) {
		let fileName = e.target.files[0].name;
		$('.filelabel').html(fileName);
		$('.uploadfilebutton').attr('for', '');
		$('form').submit();
	});
});