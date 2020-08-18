let flashdata = $('.flashdata').data('flash');
if (flashdata === 'file upload successful') {
	swal.fire({
		title: 'Upload Success',
		text: 'Access your file anytime anywhere!',
		icon: 'success'
	});
}