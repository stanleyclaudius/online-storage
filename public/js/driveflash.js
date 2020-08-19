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
} else if (flashdata === 'file exists') {
	swal.fire({
		title: 'File Exists',
		text: 'Change your file name at your local computer to unique name!',
		icon: 'warning'
	});
} else if (flashdata === 'overload storage') {
	swal.fire({
		title: 'Storage Overload',
		text: 'Your upload file when uploading has reach the max storage given!',
		icon: 'error'
	});
}