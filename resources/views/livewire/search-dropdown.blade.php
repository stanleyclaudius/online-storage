<div class="relative" x-data="{ isOpen: true }" @click.away="isOpen = false">
	<div class="absolute top-0 mt-4 pl-5">
		<img src="{{ asset('icon') }}/drive/search.png" alt="Online Storage">
	</div>
	<input wire:model.debounce.100ms="search" type="text" name="search-box" class="w-100 h-12 rounded px-16 bg-gray-200 border border-gray-400 focus:outline-none focus:shadow-outline" placeholder="Search Storage" @focus="isOpen = true" @keydown.shift.tab="isOpen = false" @keydown="isOpen = true">
	@if(strlen($search) >= 2)
		<div class="absolute rounded w-full bg-gray-100 border border-gray-400 mt-5" style="top: 100%; z-index: 9999;" x-show.transition.opacity="isOpen" @keydown.escape.window="isOpen = false">
			@if($drives->count() > 0)
			<ul>
				@foreach($drives as $drive)
				<div class="hover:bg-gray-200 @if(!$loop->last) border-b border-gray-400 @endif">
					<li class="p-3 flex items-center justify-between" @if ($loop->last) @keydown.tab="isOpen = false" @endif>
						<div class="flex items-center">
							<img src="{{ asset('icon') }}/type_icon/excel.png" alt="Online Storage" width="40" class="mr-3">
							{{ $drive->file_name }}
						</div>
						<div class="flex items-center">
							<a href="" class="mr-3">
								<img src="{{ asset('icon') }}/file_container/download-black.png" alt="Online Storage">
							</a>
							<a href="" class="mr-3">
								<img src="{{ asset('icon') }}/file_container/star-black.png" alt="Online Storage">
							</a>
							<a href="">
								<img src="{{ asset('icon') }}/file_container/trash-black.png" alt="Online Storage">
							</a>
						</div>
					</li>
				</div>
				@endforeach
			</ul>
			@else
				<div class="p-3">No results for "{{ $search }}"</div>
			@endif
		</div>
	@endif
</div>