<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
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
		@livewireStyles
	</style>
</head>
<body>

	<div class="flashdata" data-flash="{{ Session::get('drive') }}"></div>
	
	<nav class="w-full h-16 border-b border-gray-400 flex items-center">
		<div class="container mx-auto flex items-center justify-between">
			<div>
				<a href="/drive" class="text-2xl">Online Storage</a>
			</div>
			@livewire('search-dropdown')
			<div>
				@if(auth()->user()->avatar == null)
					<div class="dropdown">
						<button onclick="dropDownFunction()" class="dropbtn">
							<img src="{{ asset('avatar') }}/default.png" alt="Online Storage User Avatar" class="rounded-full border border-gray-500" width="40">
						</button>
						<div id="myDropdown" class="dropdown-content">
							<a href="javascript:void(0)" id="editprofilemodal">{{ auth()->user()->name }}</a>
							<a href="/logout">Logout</a>
						</div>
					</div>
				@else
					<div class="dropdown focus:outline-none">
						<button onclick="dropDownFunction()" class="dropbtn">
							<img src="{{ asset('avatar') }}/{{ auth()->user()->avatar }}" alt="Online Storage User Avatar" class="rounded-full border border-gray-500" width="40">
						</button>
						<div id="myDropdown" class="dropdown-content">
							<a href="javascript:void(0)" id="editprofilemodal">{{ auth()->user()->name }}</a>
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
					@yield('navbar-link')
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
						@php
							$storageUsed = DB::table('drives')->where('user_id', auth()->user()->id);
							$storageCount = $storageUsed->sum('file_size');
						@endphp
						@if($storageUsed->count() > 0)
							@if($storageCount >= 1000.00)
								@php
									$storageCountGB = $storageCount / 1000;
									$storageCountGB = number_format($storageCountGB, 2);
								@endphp
								{{ $storageCountGB }} GB of 10 GB	
							@else
								{{ $storageCount }} MB of 10 GB	
							@endif
						@else
							0 MB of 10 GB
						@endif
					</li>
				</ul>
			</div>
			<hr class="mt-5">
			<div class="px-10">
				<ul>
					<li class="mt-5">
						<form action="/drive/upload" method="post" enctype="multipart/form-data" class="uploadfileform">
							@csrf
							<input type="file" id="file" class="hidden" name="uploadfile">
							<label for="file" class="uploadfilebutton flex items-center hover:text-blue-500 hover:font-semibold" style="cursor: pointer;">
								<img src="{{ asset('icon') }}/drive/upload.png" alt="Online Storage" class="mr-5 uploadfileimage">
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
			<p class="border-b border-gray-300 pb-3 text-xl">@yield('content-title')</p>
			<div class="w-full mt-5 storage-container pr-3" style="height: 72vh; overflow-y: auto;">
				@yield('content')
			</div>
		</div>
	</div>

	<div id="modalbox" style="position: fixed; top: 0; left: 0; bottom: 0; right: 0; background-color: rgba(0,0,0,.4);" class="hidden flex items-center justify-content-center" x-data="{ isOpen: true }" @click.away="isOpen = false">
		<div class="w-100 mx-auto bg-white rounded">
			<p class="text-2xl border-b text-gray-800 border-gray-400 py-3 px-5 flex items-center justify-between">
				Edit Profile
				<a href="javascript:void(0)" class="closemodal font-bold text-xl">X</a>
			</p>
			<div class="px-5 py-3">
				<form action="/user/edit" method="post" enctype="multipart/form-data">
					@csrf
					<div>
						<label for="name" class="text-gray-700">Name</label>
						<input type="text" id="name" name="name" class="rounded w-full px-3 mt-2 h-10 border border-gray-500 focus:outline-none" value="{{ auth()->user()->name }}" placeholder="Name" autofocus>
						@if($errors->has('name'))
							<p class="text-sm text-red-500">{{ $errors->first('name') }}</p>
						@endif
					</div>
					<div class="mt-4">
						<label for="username" class="text-gray-700">Username</label>
						<input type="text" id="username" name="username" class="bg-gray-200 rounded w-full px-3 mt-2 h-10 border border-gray-500 focus:outline-none" value="{{ auth()->user()->username }}" placeholder="Your username" readonly>
					</div>
					<div class="mt-4">
						<label for="email" class="text-gray-700">Email</label>
						<input type="text" id="email" name="email" class="bg-gray-200 rounded w-full px-3 mt-2 h-10 border border-gray-500 focus:outline-none" value="{{ auth()->user()->email }}" placeholder="Your email" readonly>
					</div>
					<div class="mt-4">
						<label for="avatar" class="text-gray-700">Avatar</label>
						<div class="grid grid-cols-4 gap-10 mt-2">
							<div class="w-full border border-gray-400">
								@if(auth()->user()->avatar == null)
									<img src="{{ asset('avatar') }}/default.png" alt="Online Storage User" class="imagefinal">
								@else
									<img src="{{ asset('avatar') }}/{{ auth()->user()->avatar }}" alt="Online Storage User">
								@endif
							</div>
							<div class="col-span-3">
								<input type="file" name="avatar" id="avatar" class="border border-gray-400 rounded w-full p-3 focus:outline-none">
								@if($errors->has('avatar'))
									@if($errors->has('avatar'))
										<p class="text-sm text-red-500">{{ $errors->first('avatar') }}</p>
									@endif
								@endif
							</div>
						</div>
					</div>
					<div class="mt-4">
						<button type="submit" class="rounded px-3 py-2 text-white bg-blue-500 transition duration-150 ease-in-out hover:bg-blue-700">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="{{ asset('js') }}/driveflash.js"></script>
@livewireScripts
<script>
	function dropDownFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
	}

	$(document).ready(function() {
		$('#file').on('change', function(e) {
			let fileName = e.target.files[0].name;
			$('.filelabel').html(fileName);
			$('.uploadfilebutton').attr('for', '');
			$('.uploadfileform').submit();
		});

		$('.uploadfilebutton').mouseover(function() {
			$('.uploadfileimage').attr('src', "/icon/drive/upload-color.png");
		});
		$('.uploadfilebutton').mouseleave(function() {
			$('.uploadfileimage').attr('src', "/icon/drive/upload.png");
		});

		$('.storagelabel').mouseover(function() {
			$('.storageimage').attr('src', "/icon/drive/storage-color.png");
		});
		$('.storagelabel').mouseleave(function() {
			$('.storageimage').attr('src', "/icon/drive/storage.png");
		});

		$('.starlabel').mouseover(function() {
			$('.starimage').attr('src', "/icon/drive/star-color.png");
		});
		$('.starlabel').mouseleave(function() {
			$('.starimage').attr('src', "/icon/drive/starred.png");
		});

		$('.trashlabel').mouseover(function() {
			$('.trashimage').attr('src', "/icon/drive/trash-color.png");
		});
		$('.trashlabel').mouseleave(function() {
			$('.trashimage').attr('src', "/icon/drive/trash.png");
		});

		$('#editprofilemodal').click(function() {
			$('#myDropdown').removeClass('show');
			$('#modalbox').removeClass('hidden');
		});

		$('html').keyup(function(e) {
			if (e.keyCode == 27) {
				$('#modalbox').addClass('hidden');	
			}
		});

		$('.closemodal').click(function() {
			$('#modalbox').addClass('hidden');
		});
	});
</script>
@yield('script')
</body>
</html>