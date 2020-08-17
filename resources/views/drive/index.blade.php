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
	</style>
</head>
<body>
	
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
				<a href="">
					<img src="{{ asset('avatar') }}/default.png" alt="Online Storage User Avatar" class="rounded-full border border-gray-500" width="40">
				</a>
				@else
				<a href="">
					<img src="{{ asset('avatar') }}/{{ auth()->user()->avatar }}" alt="Online Storage User Avatar" class="rounded-full border border-gray-500" width="40">
				</a>
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
						<form action="" method="post">
							<input type="file" id="file" class="hidden">
							<label for="file" class="flex items-center hover:text-blue-500 hover:font-semibold" style="cursor: pointer;">
								<img src="{{ asset('icon') }}/drive/upload.png" alt="Online Storage" class="mr-5">
								Upload File
							</label>
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
						<a href="">
							<div class="h-48 rounded border border-gray-400">
								<div class="h-32 border-b border-gray-400">
									
								</div>
								<div class="flex items-center">
									<p class="px-2 mt-2">Lorem Ipsum Dolor Sit Amet.</p>
								</div>
								<p class="text-gray-500 mt-1 px-2">Word Document</p>
							</div>
						</a>

						<a href="">
							<div class="h-48 rounded border border-gray-400">
								<div class="h-32 border-b border-gray-400">
									
								</div>
								<div class="flex items-center">
									<p class="px-2 mt-2">Lorem Ipsum Dolor Sit Amet.</p>
								</div>
								<p class="text-gray-500 mt-1 px-2">Word Document</p>
							</div>
						</a>

						<a href="">
							<div class="h-48 rounded border border-gray-400">
								<div class="h-32 border-b border-gray-400">
									
								</div>
								<div class="flex items-center">
									<p class="px-2 mt-2">Lorem Ipsum Dolor Sit Amet.</p>
								</div>
								<p class="text-gray-500 mt-1 px-2">Word Document</p>
							</div>
						</a>

						<a href="">
							<div class="h-48 rounded border border-gray-400">
								<div class="h-32 border-b border-gray-400">
									
								</div>
								<div class="flex items-center">
									<p class="px-2 mt-2">Lorem Ipsum Dolor Sit Amet.</p>
								</div>
								<p class="text-gray-500 mt-1 px-2">Word Document</p>
							</div>
						</a>

						<a href="">
							<div class="h-48 rounded border border-gray-400">
								<div class="h-32 border-b border-gray-400">
									
								</div>
								<div class="flex items-center">
									<p class="px-2 mt-2">Lorem Ipsum Dolor Sit Amet.</p>
								</div>
								<p class="text-gray-500 mt-1 px-2">Word Document</p>
							</div>
						</a>
					</div>
				</div>

				<div class="mt-8">
					<p class="font-semibold">25 December 2020</p>
					<div class="grid grid-cols-4 gap-6 mt-4">
						<a href="">
							<div class="h-48 rounded border border-gray-400">
								<div class="h-32 border-b border-gray-400">
									
								</div>
								<div class="flex items-center">
									<p class="px-2 mt-2">Lorem Ipsum Dolor Sit Amet.</p>
								</div>
								<p class="text-gray-500 mt-1 px-2">Word Document</p>
							</div>
						</a>
					</div>
				</div>

				<div class="mt-8">
					<p class="font-semibold">25 December 2020</p>
					<div class="grid grid-cols-4 gap-6 mt-4">
						<a href="">
							<div class="h-48 rounded border border-gray-400">
								<div class="h-32 border-b border-gray-400">
									
								</div>
								<div class="flex items-center">
									<p class="px-2 mt-2">Lorem Ipsum Dolor Sit Amet.</p>
								</div>
								<p class="text-gray-500 mt-1 px-2">Word Document</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>