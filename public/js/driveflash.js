let flashdata = $('.flashdata').data('flash');
if (flashdata === 'file upload successful') {
	swal.fire({
		title: 'Upload Success',
		text: 'Access your file anytime anywhere!',
		icon: 'success'
	});
} else if (flashdata === 'restore file') {
	swal.fire({
		title: 'File Restored',
		text: 'Your trash file has been restored to your storage!',
		icon: 'success'
	});
} else if (flashdata === 'file deleted') {
	swal.fire({
		title: 'File Deleted',
		text: 'Your file has been deleted from your Online Storage!',
		icon: 'success'
	});
}