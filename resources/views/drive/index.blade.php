<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Online Storage | My Drive</title>
	<link rel="stylesheet" href="{{ asset('css') }}/main.css">
	<style>
		.storage-container::-webkit-scrollbar {
			width: .75em;
		}

		.storage-container::-webkit-scrollbar-track {
			border: 1px solid #ccc;
		}

		.storage-container::-webkit-scrollbar-thumb {
			background-color: #e0e0e0;
			outline: 1px solid slategrey;
		}

		.dropbtn {
			padding: 16px;
			cursor: pointer;
		}

		.dropdown {
			position: relative;
			display: inline-block;
			float: right;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f1f1f1;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
			right: 0;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown-content a:hover {
			background-color: #ddd;
		}

		.show {
			display:block;
		}
	</style>
</head>
<body>

	<div class="flashdata" data-flash="{{ Session::get('drive') }}"></div>
	
	<nav class="w-full h-16 border-b border-gray-400 flex items-center">
		<div class="container mx-auto flex items-center justify-between">
			<div>
				<a href="/drive" class="text-2xl">Online Storage</a>
			</div>
			<div>
				<form action=""	class="relative">
					<div class="absolute top-0 mt-4 pl-5">
						<img src="{{ asset('icon') }}/drive/search.png" alt="Online Storage">
					</div>
					<input type="text" name="search-box" class="w-100 h-12 rounded px-16 bg-gray-200 border border-gray-400 focus:outline-none focus:shadow-outline" placeholder="Search Storage">
				</form>
			</div>
			<div>
				@if(auth()->user()->avatar == null)
					<div class="dropdown">
						<button onclick="dropDownFunction()" class="dropbtn">
							<img src="{{ asset('avatar') }}/default.png" alt="Online Storage User Avatar" class="rounded-full border border-gray-500" width="40">
						</button>
						<div id="myDropdown" class="dropdown-content">
							<a href="#">{{ auth()->user()->name }}</a>
							<a href="/logout">Logout</a>
						</div>
					</div>
				@else
					<div class="dropdown">
						<button onclick="dropDownFunction()" class="dropbtn">
							<img src="{{ asset('avatar') }}/{{ auth()->user()->avatar }}" alt="Online Storage User Avatar" class="rounded-full border border-gray-500" width="40">
						</button>
						<div id="myDropdown" class="dropdown-content">
							<a href="#">{{ auth()->user()->name }}</a>
							<a href="/logout">Logout</a>
						</div>
					</div>
				@endif
			</div>
		</div>
	</nav>

	<div class="grid grid-cols-5 gap-0 w-full mt-4">
		<div>
			<div class="px-10">
				<ul>
					<li>
						<a href="" class="flex items-center hover:text-blue-500 hover:font-semibold">
							<img src="{{ asset('icon') }}/drive/storage.png" alt="Online Storage" class="mr-5">
							My Storage
						</a>
					</li>
					<li class="mt-5">
						<a href="" class="flex items-center hover:text-blue-500 hover:font-semibold">
							<img src="{{ asset('icon') }}/drive/starred.png" alt="Online Storage" class="mr-5">
							Starred
						</a>
					</li>
					<li class="mt-5">
						<a href="" class="flex items-center hover:text-blue-500 hover:font-semibold">
							<img src="{{ asset('icon') }}/drive/trash.png" alt="Online Storage" class="mr-5">
							Trash
						</a>
					</li>
				</ul>
			</div>
			<hr class="mt-5">
			<div class="px-10">
				<ul>
					<li class="flex items-center mt-5">
						<img src="{{ asset('icon') }}/drive/storage-avail.png" alt="" class="mr-5">
						Storage Used
					</li>
					<li class="pl-10 mt-2 text-gray-500">
						203 MB of 10 GB	
					</li>
				</ul>
			</div>
			<hr class="mt-5">
			<div class="px-10">
				<ul>
					<li class="mt-5">
						<form action="/drive/upload" method="post" enctype="multipart/form-data">
							@csrf
							<input type="file" id="file" class="hidden" name="uploadfile">
							<label for="file" class="flex items-center hover:text-blue-500 hover:font-semibold" style="cursor: pointer;">
								<img src="{{ asset('icon') }}/drive/upload.png" alt="Online Storage" class="mr-5">
								<p class="filelabel">Upload File</p>
							</label>
							@if($errors->has('uploadfile'))
								<p class="text-sm mt-1 text-red-500">The file you upload can only be a PDF, word, powerpoint, excel, or image document.</p>
							@endif
						</form>
					</li>
				</ul>
			</div>
		</div>

		<div class="col-span-4 px-10">
			<p class="border-b border-gray-300 pb-3 text-xl">My Storage</p>
			<div class="w-full mt-5 storage-container pr-3" style="height: 72vh; overflow-y: auto;">
				<div>
					<p class="font-semibold">25 December 2020</p>
					<div class="grid grid-cols-4 gap-6 mt-4">
						<div class="relative">
							<div class="absolute top-0 right-0 pr-4 pt-3 flex items-center">
								<a href="javascript:void(0)" class="mr-3" id="staricon">
									<img src="{{ asset('icon') }}/file_container/star-black.png" alt="Online Storage" id="changestar">
								</a>
								<a href="" id="trashicon">
									<img src="{{ asset('icon') }}/file_container/trash-black.png" alt="Online Storage" id="changetrash">
								</a>
							</div>
							<div class="h-48 rounded border border-gray-400">
								<div class="h-32 border-b border-gray-400">
									
								</div>
								<a href="" class="hover:text-blue-600">
									<div class="flex items-center flex items-center h-16">
										<p class="px-2">Lorem Ipsum Dolor Sit Amet Lorem Ipsum.</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
	function dropDownFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
	}


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

		$('#file').on('change', function(e) {
			let fileName = e.target.files[0].name;
			$('.filelabel').html(fileName);
			$('form').submit();
		});
	});

	let flashdata = $('.flashdata').data('flash');
	if (flashdata === 'file upload successful') {
		swal.fire({
			title: 'Upload Success',
			text: 'Access your file anytime anywhere!',
			icon: 'success'
		});
	}
</script>
</body>
</html>