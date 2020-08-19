$(document).ready(function() {
	for (let i = 1; i <= $('.actionbutton').length; i++) {
		$('#trashicon' + i).mouseover(function() {
			$('#changetrash' + i).attr('src', "/icon/file_container/trash-color.png");
		});

		$('#restoreicon' + i).mouseover(function() {
			$('#changerestore' + i).attr("src", '/icon/file_container/restore-color.png')
		});
	}

	for (let i = 1; i <= $('.actionbutton').length; i++) {
		$('#trashicon' + i).mouseleave(function() {
			$('#changetrash' + i).attr('src', "/icon/file_container/trash-black.png");
		});

		$('#restoreicon' + i).mouseleave(function() {
			$('#changerestore' + i).attr("src", '/icon/file_container/restore-black.png')
		});
	}

	$('.trashfile').click(function() {
		let dataID = $(this).data('id');
		Swal.fire({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
			if (result.value) {
				document.location.href = "/trash/delete/" + dataID;
			}
		})
	})
});