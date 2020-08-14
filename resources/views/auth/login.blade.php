@extends('template/main')

@section('title', 'Online Storage | Login')

@section('navlink')
<li><a href="/register" class="rounded px-3 py-2 bg-blue-500 text-white transition duration-150 ease-in-out hover:bg-blue-600">Sign Up</a></li>
@endsection

@section('content')
<div class="flashdata" data-flash="{{ Session::get('auth') }}"></div>
<p class="text-3xl text-center">Sign In</p>
<p class="mt-1 mb-8 text-gray-500 text-center">Sign in to our platform to start backuping your documents</p>
<form action="/login" method="post" class="border border-gray-500 rounded p-4 mx-auto mb-20 w-64">
	@csrf
	<div>
		@if($errors->has('username'))
			<label for="username" class="text-red-500">{{ $errors->first('username') }}</label>
		@else
			<label for="username">Username</label>
		@endif
		<input type="text" id="username" name="username" class="w-full px-3 rounded h-10 border border-gray-500 focus:shadow-outline focus:outline-none mt-2" autofocus autocomplete="off" value="{{ old('username') }}" placeholder="Your username">
	</div>
	<div class="mt-6 mb-5">
		@if($errors->has('password'))
			<label for="password" class="text-red-500">{{ $errors->first('password') }}</label>
		@else
			<label for="password">Password</label>
		@endif
		<input type="password" id="password" name="password" class="mb-1 w-full px-3 rounded h-10 border border-gray-500 focus:shadow-outline focus:outline-none mt-2" placeholder="Your password">
		<a href="/forget" class="text-blue-600">Forget password?</a>
	</div>
	<button type="submit" class="bg-blue-500 text-white rounded px-3 py-2 transition duration-150 ease-in-out hover:bg-blue-600">Sign In</button>
</form>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="{{ asset('js') }}/login.js"></script>
@endsection