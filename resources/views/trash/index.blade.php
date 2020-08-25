@extends('template/drive')

@section('title', 'Online Storage | Trash File')

@section('navbar-link')
<li>
	<a href="/drive" class="storagelabel flex items-center hover:text-blue-500 hover:font-semibold">
		<img src="{{ asset('icon') }}/drive/storage.png" alt="Online Storage" class="mr-5 storageimage">
		My Storage
	</a>
</li>
<li class="mt-5">
	<a href="/starred" class="starlabel flex items-center hover:text-blue-500 hover:font-semibold">
		<img src="{{ asset('icon') }}/drive/starred.png" alt="Online Storage" class="mr-5 starimage">
		Starred
	</a>
</li>
<li class="mt-5">
	<a href="/trash" class="flex items-center text-blue-500 font-semibold hover:text-blue-500 hover:font-semibold">
		<img src="{{ asset('icon') }}/drive/trash-color.png" alt="Online Storage" class="mr-5">
		Trash
	</a>
</li>
@endsection

@section('mobile-menu-link')
<a href="/drive" class="ml-6 text-gray-600">Storage</a>
<a href="/starred" class="ml-6 text-gray-600">Starred</a>
@endsection

@section('content-title', 'Trash')

@section('content')
@if(count($dates) > 0)
	@foreach($dates as $date)
		<div class="mb-10">
			<p class="font-semibold">{{ $date }}</p>
			<div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-4">
				@php
					$i = 1;
				@endphp
				@foreach($drives as $drive)
					@if($drive->created_at->format('d M Y') === $date)
					<div class="relative">
						<div class="absolute top-0 right-0 pr-4 pt-3 flex items-center actionbutton">
							<a href="/trash/restore/{{ $drive->id }}" class="restorefile mr-3" id="restoreicon{{ $i }}">
								<img src="{{ asset('icon') }}/file_container/restore-black.png" alt="Online Storage" id="changerestore{{ $i }}">
							</a>
							<a href="javascript:void(0)" class="trashfile" id="trashicon{{ $i }}" data-id="{{ $drive->id }}">
								<img src="{{ asset('icon') }}/file_container/trash-black.png" alt="Online Storage" id="changetrash{{ $i }}">
							</a>
						</div>
						<div class="h-48 rounded border border-gray-400">
							<div class="h-32 border-b border-gray-400 pl-3 pr-32 py-4">
								@if(($drive->file_type == 'xls') || ($drive->file_type == 'xlsx'))
								<img src="{{ asset('icon') }}/type_icon/excel.png" alt="" class="w-full h-full">
								@endif
								@if(($drive->file_type == 'ppt') || ($drive->file_type == 'pptx'))
								<img src="{{ asset('icon') }}/type_icon/powerpoint.png" alt="" class="w-full h-full">
								@endif
								@if($drive->file_type == 'pdf')
								<img src="{{ asset('icon') }}/type_icon/pdf.png" alt="" class="w-full h-full">
								@endif
								@if(($drive->file_type == 'jpg') || ($drive->file_type == 'jpeg') || ($drive->file_type == 'png') || ($drive->file_type == 'gif') || ($drive->file_type == 'JPG'))
								<img src="{{ asset('icon') }}/type_icon/image.png" alt="" class="w-full h-full">
								@endif
								@if(($drive->file_type == 'doc') || ($drive->file_type == 'docx'))
								<img src="{{ asset('icon') }}/type_icon/word.png" alt="" class="w-full h-full">
								@endif
								@if($drive->file_type == 'txt')
								<img src="{{ asset('icon') }}/type_icon/txt.png" alt="" class="w-full h-full">
								@endif
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
@else
	<div class="w-full h-12 rounded flex items-center px-4 bg-red-500 text-white">
		<p>Currently you have no trash file!
	</div>
@endif
@endsection

@section('script')
<script src="{{ asset('js') }}/trash.js"></script>
@endsection