@extends('template/main')

@section('title', 'Online Storage')

@section('content')
<div class="grid grid-cols-2 gap-16 items-center mb-24">
	<div>
		<p class="text-4xl">Your Documents Means Alot</p>
		<p class="text-sm mb-6 text-gray-500">Backup your documents online, so you no need to worry about losing data at your device. We keep your data safe at our site. We're here for you.</p>
		<p class="mb-10 text-gray-700">We provide an online storage for you to save your documents online. So whenever you have an important document, you can save at our site for backup, and it's safe also free. You can access from every platform because it's online. So when you lost your documents, you can fetch from our site.</p>
		<a href="" class="rounded px-3 py-2 bg-blue-500 text-white transition ease-in-out duration-150 hover:bg-blue-600">Explore More</a>
	</div>
	<div>
		<img src="{{ asset('img') }}/content/jumbotron.svg" alt="Online Storage">
	</div>
</div>

<section id="why" class="mb-24">
	<p class="text-4xl text-center">Why Choose Us?</p>
	<p class="text-center text-gray-500 mt-1">List of benefits that you can got from our storage service</p>
	<div class="grid grid-cols-4 gap-10 items-center mt-10">
		<div class="w-full h-64 bg-gray-200"></div>
		<div class="w-full h-64 bg-gray-200"></div>
		<div class="w-full h-64 bg-gray-200"></div>
		<div class="w-full h-64 bg-gray-200"></div>
	</div>
</section>

<section id="faq" class="mb-24">
	<p class="text-4xl text-center">General FAQ</p>
	<p class="text-center text-gray-500 mt-1">General questions about our service</p>
	<div class="grid grid-cols-2 gap-16 items-center mt-10">
		<div>
			<div class="w-full h-12 border border-gray-400"></div>
			<div class="w-full h-12 border border-gray-400 mt-10"></div>
			<div class="w-full h-12 border border-gray-400 mt-10"></div>
			<div class="w-full h-12 border border-gray-400 mt-10"></div>
		</div>
		<div>
			<div class="w-full h-12 border border-gray-400"></div>
			<div class="w-full h-12 border border-gray-400 mt-10"></div>
			<div class="w-full h-12 border border-gray-400 mt-10"></div>
			<div class="w-full h-12 border border-gray-400 mt-10"></div>
		</div>
	</div>
</section>
@endsection