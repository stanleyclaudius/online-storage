$(document).ready(function() {
	let flashdata = $('.flashdata').data('flash');
	if (flashdata === 'account created') {
		swal.fire({
			title: 'Account Created',
			text: 'Your account has been created!',
			icon: 'success'
		});
	} else if (flashdata === 'no credentials') {
		swal.fire({
			title: 'No Credentials',
			text: 'Your email or password can\'t be found!',
			icon: 'error'
		});
	} else if (flashdata === 'logout') {
		swal.fire({
			title: 'Account Logout',
			text: 'Your account has been logout!',
			icon: 'success'
		});
	}
});