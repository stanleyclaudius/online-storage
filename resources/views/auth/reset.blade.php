@extends('template/main')

@section('title', 'Online Storage | Reset Password')

@section('navlink')
<li>Reset Password</li>
@endsection

@section('content')
<p class="text-3xl text-center">Reset Password</p>
<p class="mt-1 mb-8 text-gray-500 text-center">Choose your new password for <b>Online Storage</b> account</p>
<form action="/login" method="post" class="border border-gray-500 rounded p-6 mx-auto mb-20" style="width: 35%;">
	@csrf
	<div>
		@if($errors->has('password'))
			<label for="password" class="text-red-500">{{ $errors->first('password') }}</label>
		@else
			<label for="password">New password</label>
		@endif
		<input type="password" id="password" name="password" class="w-full px-3 rounded h-10 border border-gray-500 focus:shadow-outline focus:outline-none mt-2" placeholder="Your new password">
	</div>
	<div class="my-6">
		@if($errors->has('password_confirmation'))
			<label for="password_confirmation" class="text-red-500">{{ $errors->first('password_confirmation') }}</label>
		@else
			<label for="password_confirmation">Password Confirmation</label>
		@endif
		<input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 rounded h-10 border border-gray-500 focus:shadow-outline focus:outline-none mt-2" placeholder="Re-type your new password">
	</div>
	<button type="submit" class="bg-blue-500 text-white rounded px-3 py-2 transition duration-150 ease-in-out hover:bg-blue-600">Submit</button>
</form>
@endsection