<div class="relative mb-10 sm:mb-10 md:mb-10 lg:mb-0" x-data="{ isOpen: true }" @click.away="isOpen = false">
	<div class="absolute top-0 mt-4 pl-5">
		<img src="{{ asset('icon') }}/drive/search.png" alt="Online Storage">
	</div>
	<input wire:model.debounce.100ms="search" type="text" name="search-box" class="w-full sm:w-full md:w-100 lg:w-100 h-12 rounded px-16 bg-gray-200 border border-gray-400 focus:outline-none focus:shadow-outline" placeholder="Search Storage" @focus="isOpen = true" @keydown.shift.tab="isOpen = false" @keydown="isOpen = true">
	@if(strlen($search) >= 2)
		<div class="absolute rounded w-full bg-gray-100 border border-gray-400 mt-5" style="top: 100%; z-index: 9999;" x-show.transition.opacity="isOpen" @keydown.escape.window="isOpen = false">
			@if($drives->count() > 0)
			<ul>
				@php
					$i = 1;
				@endphp
				@foreach($drives as $drive)
				<div class="hover:bg-gray-200 @if(!$loop->last) border-b border-gray-400 @endif">
					<li class="p-3 flex items-center justify-between" @if ($loop->last) @keydown.tab="isOpen = false" @endif>
						<div class="flex items-center">
							@if(($drive->file_type == 'xls') || ($drive->file_type == 'xlsx'))
							<img src="{{ asset('icon') }}/type_icon/excel.png" alt="Online Storage" width="40" class="mr-3">
							@endif
							@if(($drive->file_type == 'ppt') || ($drive->file_type == 'pptx'))
							<img src="{{ asset('icon') }}/type_icon/powerpoint.png" alt="Online Storage" width="40" class="mr-3">
							@endif
							@if($drive->file_type == 'pdf')
							<img src="{{ asset('icon') }}/type_icon/pdf.png" alt="Online Storage" width="40" class="mr-3">
							@endif
							@if(($drive->file_type == 'jpg') || ($drive->file_type == 'jpeg') || ($drive->file_type == 'png') || ($drive->file_type == 'gif') || ($drive->file_type == 'JPG'))
							<img src="{{ asset('icon') }}/type_icon/image.png" alt="Online Storage" width="40" class="mr-3">
							@endif
							@if(($drive->file_type == 'doc') || ($drive->file_type == 'docx'))
							<img src="{{ asset('icon') }}/type_icon/word.png" alt="Online Storage" width="40" class="mr-3">
							@endif
							@if($drive->file_type == 'txt')
							<img src="{{ asset('icon') }}/type_icon/txt.png" alt="Online Storage" width="40" class="mr-3">
							@endif
							{{ $drive->file_name }}
						</div>
						<div class="flex items-center search-container">
							@if($drive->is_trash == 1)
								<a href="/trash/restore/{{ $drive->id }}" class="mr-3">
									<img src="{{ asset('icon') }}/file_container/restore-black.png" alt="Online Storage">
								</a>
							@else
								<a href="/user_drive/{{ auth()->user()->id }}_{{ auth()->user()->username }}/{{ $drive->file_name }}" download class="mr-3" id="downloadiconsearch{{ $i }}">
									<img src="{{ asset('icon') }}/file_container/download-black.png" alt="Online Storage" id="downloadchangesearch{{ $i }}">
								</a>
							@endif
						</div>
					</li>
				</div>
				@php
					$i++;
				@endphp
				@endforeach
			</ul>
			@else
				<div class="p-3">No results for "{{ $search }}"</div>
			@endif
		</div>
	@endif
</div>