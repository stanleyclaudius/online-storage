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

	$('.starredfile').click(function() {
		let dataID = $(this).data('id');
		let dataImage = $(this).data('iterate');
		$.ajax({
			url: '/drive/star/' + dataID,
			type: 'get',
			dataType: 'json',
			success: function(data) {
				if (data === 'starred') {
					$('#changestar' + dataImage).attr('src', "/icon/file_container/star-color.png");
					document.location.href = '/drive';
				} else if (data === 'unstarred') {
					$('#changestar' + dataImage).attr('src', "/icon/file_container/star-black.png");
					document.location.href = '/drive';
				}
			}
		});
	})

	$('.trashfile').click(function() {
		let dataID = $(this).data('id');
		$.ajax({
			url: '/drive/trash/' + dataID,
			type: 'get',
			success: function() {
				document.location.href = '/drive';
			}
		});
	});
});