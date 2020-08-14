@extends('template/main')

@section('title', 'Online Storage')

@section('navlink')
<li><a href="/login" class="mr-10">Sign In</a></li>
<li><a href="/register" class="rounded px-3 py-2 bg-blue-500 text-white transition duration-150 ease-in-out hover:bg-blue-600">Sign Up</a></li>
@endsection

@section('content')
<div class="grid grid-cols-2 gap-16 items-center mb-24">
	<div>
		<p class="text-4xl">Your Documents Means Alot</p>
		<p class="text-sm mb-6 text-gray-500">Backup your documents online, so you no need to worry about losing data at your device. We keep your data safe at our site. We're here for you.</p>
		<p class="mb-10 text-gray-700">We provide an online storage for you to save your documents online. So whenever you have an important document, you can save at our site for backup, and it's safe also free. You can access from every platform because it's online. So when you lost your documents, you can fetch from our site.</p>
		<a href="" class="rounded px-3 py-2 bg-blue-500 text-white transition ease-in-out duration-150 hover:bg-blue-600">Get Started</a>
	</div>
	<div>
		<img src="{{ asset('img') }}/content/jumbotron.svg" alt="Online Storage">
	</div>
</div>

<section id="why" class="mb-24">
	<p class="text-4xl text-center">Why Choose Us?</p>
	<p class="text-center text-gray-500 mt-1">List of benefits that you can got from our storage service</p>
	<div class="grid grid-cols-4 gap-20 items-center mt-10">
		<div class="w-full h-64 rounded-lg text-center p-4" style="box-shadow: 5px 5px 30px rgba(0,0,0,.5);">
			<img src="{{ asset('icon') }}/why/backup-color.png" alt="Online Storage" class="mx-auto mb-6">
			<p class="text-2xl">Backup Documents</p>
			<p class="text-gray-500 mt-4">Backup your documents online and access it whenever you want</p>
		</div>
		<div class="w-full h-64 rounded-lg text-center p-4" style="box-shadow: 5px 5px 30px rgba(0,0,0,.5);">
			<img src="{{ asset('icon') }}/why/secure.png" alt="Online Storage" class="mx-auto mb-6">
			<p class="text-2xl">Safe Documents</p>
			<p class="text-gray-500 mt-4">No need to worry about the security, the documents will be safe</p>
		</div>
		<div class="w-full h-64 rounded-lg text-center p-4" style="box-shadow: 5px 5px 30px rgba(0,0,0,.5);">
			<img src="{{ asset('icon') }}/why/available.png" alt="Online Storage" class="mx-auto mb-6">
			<p class="text-2xl">Access Everytime</p>
			<p class="text-gray-500 mt-4">Because this is a website, you can access everytime you want to get your documents</p>
		</div>
		<div class="w-full h-64 rounded-lg text-center p-4" style="box-shadow: 5px 5px 30px rgba(0,0,0,.5);">
			<img src="{{ asset('icon') }}/why/free.png" alt="Online Storage" class="mx-auto mb-6">
			<p class="text-2xl">Free of Charge</p>
			<p class="text-gray-500 mt-4">Whole of our service is free to use  by everyone, without any tax or additional fee</p>
		</div>
	</div>
</section>

<section id="faq" class="mb-24">
	<p class="text-4xl text-center">General FAQ</p>
	<p class="text-center text-gray-500 mt-1">General questions about our service</p>
	<div class="grid grid-cols-2 gap-16 mt-10">
		<div>
			<a href="javascript:void(0)" id="faq1" class="faq">
				<div class="w-full h-12 bg-gray-100 border border-gray-400 flex items-center justify-between px-5">
					<p>Can anyone else access our documents beside us ?</p>
					<img src="{{ asset('icon') }}/faq/down.png" alt="Online Storage">
				</div>
			</a>
			<div id="faq1-content" class="faq-content w-full p-5 bg-gray-100 border-l border-r border-b border-gray-400 hidden">
				No. Even the creator of website can't access your documents. You have full control for your documents.
			</div>
			<a href="javascript:void(0)" id="faq2" class="faq">
				<div class="w-full h-12 bg-gray-100 border border-gray-400 mt-10 flex items-center justify-between px-5">
					<p>Is this service free of charge ?</p>
					<img src="{{ asset('icon') }}/faq/down.png" alt="Online Storage">
				</div>
			</a>
			<div id="faq2-content" class="faq-content w-full p-5 bg-gray-100 border-l border-r border-b border-gray-400 hidden">
				Yes. It's free of charge, and it's lifetime access.
			</div>
			<a href="javascript:void(0)" id="faq3" class="faq">
				<div class="w-full h-12 bg-gray-100 border border-gray-400 mt-10 flex items-center justify-between px-5">
					<p>How many storage size given to store my documents ?</p>
					<img src="{{ asset('icon') }}/faq/down.png" alt="Online Storage">
				</div>
			</a>
			<div id="faq3-content" class="faq-content w-full p-5 bg-gray-100 border-l border-r border-b border-gray-400 hidden">
				You're given 10GB storage to store your documents.
			</div>
			<a href="javascript:void(0)" id="faq4" class="faq">
				<div class="w-full h-12 bg-gray-100 border border-gray-400 mt-10 flex items-center justify-between px-5">
					<p>Can i download the file that I save to this site ?</p>
					<img src="{{ asset('icon') }}/faq/down.png" alt="Online Storage">
				</div>
			</a>
			<div id="faq4-content" class="faq-content w-full p-5 bg-gray-100 border-l border-r border-b border-gray-400 hidden">
				Yes you can.
			</div>
		</div>
		<div>
			<a href="javascript:void(0)" id="faq5" class="faq">
				<div class="w-full h-12 bg-gray-100 border border-gray-400 flex items-center justify-between px-5">
					<p>Is this service secure ?</p>
					<img src="{{ asset('icon') }}/faq/down.png" alt="Online Storage">
				</div>
			</a>
			<div id="faq5-content" class="faq-content w-full p-5 bg-gray-100 border-l border-r border-b border-gray-400 hidden">
				Yes it's secure. We protect all your documents that you store at our site.
			</div>
			<a href="javascript:void(0)" id="faq6" class="faq">
				<div class="w-full h-12 bg-gray-100 border border-gray-400 mt-10 flex items-center justify-between px-5">
					<p>What type of file can I store at this site ?</p>
					<img src="{{ asset('icon') }}/faq/down.png" alt="Online Storage">
				</div>
			</a>
			<div id="faq6-content" class="faq-content w-full p-5 bg-gray-100 border-l border-r border-b border-gray-400 hidden">
				We can store almost every document type, e.g. PDF, Microsoft Word document, Microsoft Excel document, Microsoft Powerpoint document, image, text file. We don't accept <b>application</b>, <b>script</b>, or <b>batch</b> file.
			</div>
			<a href="javascript:void(0)" id="faq7" class="faq">
				<div class="w-full h-12 bg-gray-100 border border-gray-400 mt-10 flex items-center justify-between px-5">
					<p>Can this service delete my documents ?</p>
					<img src="{{ asset('icon') }}/faq/down.png" alt="Online Storage">
				</div>
			</a>
			<div id="faq7-content" class="faq-content w-full p-5 bg-gray-100 border-l border-r border-b border-gray-400 hidden">
				Yes it can. It only delete your documents at this site, not at your local computer.
			</div>
			<a href="javascript:void(0)" id="faq8" class="faq">
				<div class="w-full h-12 bg-gray-100 border border-gray-400 mt-10 flex items-center justify-between px-5">
					<p>Can I get back my documents when I delete it in this site ?</p>
					<img src="{{ asset('icon') }}/faq/down.png" alt="Online Storage">
				</div>
			</a>
			<div id="faq8-content" class="faq-content w-full p-5 bg-gray-100 border-l border-r border-b border-gray-400 hidden">
				Yes you can. When you delete your documents at this site, we have <b><i>trash</i></b> feature, so you can get back your documents.
			</div>
		</div>
	</div>
</section>
@endsection

@section('script')
<script src="{{ asset('js') }}/home.js"></script>
@endsection