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
						<form action="/drive/upload" method="post" enctype="multipart/form-data">
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
			$('form').submit();
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
	});
</script>
@yield('script')
</body>
</html>