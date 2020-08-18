@extends('template/drive')

@section('title', 'Online Storage | Drive')

@section('content-title', 'My Storage')

@section('content')
<div class="mb-10">
	<p class="font-semibold">25 December 2020</p>
	<div class="grid grid-cols-4 gap-6 mt-4">
		<div class="relative">
			<div class="absolute top-0 right-0 pr-4 pt-3 flex items-center">
				<a href="" class="mr-3" id="downloadicon">
					<img src="{{ asset('icon') }}/file_container/download-black.png" alt="Online Storage" id="downloadchange">
				</a>
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
@endsection

@section('script')
<script src="{{ asset('js') }}/drive.js"></script>
@endsection