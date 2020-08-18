@extends('template/drive')

@section('title', 'Online Storage | Drive')

@section('content-title', 'My Storage')

@section('content')
@foreach($dates as $date)
	<div class="mb-10">
		<p class="font-semibold">{{ $date }}</p>
		<div class="grid grid-cols-4 gap-6 mt-4">
			@php
				$i = 1;
			@endphp
			@foreach($drives as $drive)
			@if($drive->created_at->format('d M Y') === $date)
			<div class="relative">
				<div class="absolute top-0 right-0 pr-4 pt-3 flex items-center actionbutton">
					<a href="" class="mr-3" id="downloadicon{{ $i }}">
						<img src="{{ asset('icon') }}/file_container/download-black.png" alt="Online Storage" id="downloadchange{{ $i }}">
					</a>
					<a href="javascript:void(0)" class="mr-3" id="staricon{{ $i }}">
						<img src="{{ asset('icon') }}/file_container/star-black.png" alt="Online Storage" id="changestar{{ $i }}">
					</a>
					<a href="" id="trashicon{{ $i }}">
						<img src="{{ asset('icon') }}/file_container/trash-black.png" alt="Online Storage" id="changetrash{{ $i }}">
					</a>
				</div>
				<div class="h-48 rounded border border-gray-400">
					<div class="h-32 border-b border-gray-400 pl-3 pr-32 py-4">
						<img src="{{ asset('icon') }}/type_icon/image.png" alt="" class="w-full h-full">
					</div>
					<a href="" class="hover:text-blue-600">
						<div class="flex items-center items-center h-16">
							<p class="px-3">{{ $drive->file_name }}</p>
						</div>
					</a>
				</div>
			</div>
			@endif
			@php
				$i++;
			@endphp
			@endforeach
		</div>
	</div>
@endforeach
@endsection

@section('script')
<script src="{{ asset('js') }}/drive.js"></script>
@endsection