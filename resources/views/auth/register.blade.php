@extends('template/main')

@section('title', 'Online Storage | Register')

@section('navlink')
<li><a href="/login" class="rounded px-3 py-2 bg-blue-500 text-white transition duration-150 ease-in-out hover:bg-blue-600">Sign In</a></li>
@endsection

@section('content')
<p class="text-3xl text-center">Sign Up</p>
<p class="mt-1 mb-8 text-gray-500 text-center">Sign up to our platform to start putting your documents on our site</p>
<form action="/register" method="post" class="border border-gray-500 rounded p-6 mx-auto mb-20 w-64">
	@csrf
	<div>
		@if($errors->has('name'))
			<label for="name" class="text-red-500">{{ $errors->first('name') }}</label>
		@else
			<label for="name">Name</label>
		@endif
		<input type="text" id="name" name="name" class="w-full px-3 rounded h-10 border border-gray-500 focus:shadow-outline focus:outline-none mt-2" autofocus autocomplete="off" value="{{ old('name') }}" placeholder="Your full name">
	</div>
	<div class="my-6">
		@if($errors->has('email'))
			<label for="email" class="text-red-500">{{ $errors->first('email') }}</label>
		@else
			<label for="email">Email</label>
		@endif
		<input type="text" id="email" name="email" class="w-full px-3 rounded h-10 border border-gray-500 focus:shadow-outline focus:outline-none mt-2" autocomplete="off" value="{{ old('email') }}" placeholder="Your email address">
	</div>
	<div class="my-6">
		@if($errors->has('username'))
			<label for="username" class="text-red-500">{{ $errors->first('username') }}</label>
		@else
			<label for="username">Username</label>
		@endif
		<input type="text" id="username" name="username" class="w-full px-3 rounded h-10 border border-gray-500 focus:shadow-outline focus:outline-none mt-2" autocomplete="off" value="{{ old('username') }}" placeholder="Pick one username for your account">
	</div>
	<div class="my-6">
		@if($errors->has('password'))
			<label for="password" class="text-red-500">{{ $errors->first('password') }}</label>
		@else
			<label for="password">Password</label>
		@endif
		<input type="password" id="password" name="password" class="w-full px-3 rounded h-10 border border-gray-500 focus:shadow-outline focus:outline-none mt-2" placeholder="Set up password for your account">
	</div>
	<div class="my-6">
		@if($errors->has('password_confirmation'))
			<label for="password_confirmation" class="text-red-500">{{ $errors->first('password_confirmation') }}</label>
		@else
			<label for="password_confirmation">Password Confirmation</label>
		@endif
		<input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 rounded h-10 border border-gray-500 focus:shadow-outline focus:outline-none mt-2" placeholder="Re-type your password">
	</div>
	<button type="submit" class="bg-blue-500 text-white rounded px-3 py-2 transition duration-150 ease-in-out hover:bg-blue-600">Sign Up</button>
</form>
@endsection