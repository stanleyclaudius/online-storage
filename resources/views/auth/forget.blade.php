@extends('template/main')

@section('title', 'Online Storage | Forget Password')

@section('navlink')
<li><a href="/login" class="rounded px-3 py-2 bg-blue-500 text-white transition duration-150 ease-in-out hover:bg-blue-600">Sign In</a></li>
@endsection

@section('content')
<p class="text-3xl text-center">Forget Password</p>
<p class="mt-1 mb-8 text-gray-500 text-center">Fill up your email you used to register <b>Online Storage</b> account</p>
<form action="/login" method="post" class="border border-gray-500 rounded p-6 mx-auto mb-20" style="width: 35%;">
	@csrf
	<div class="mb-6">
		@if($errors->has('email'))
			<label for="email" class="text-red-500">{{ $errors->first('email') }}</label>
		@else
			<label for="email">Email</label>
		@endif
		<input type="text" id="email" name="email" class="w-full px-3 rounded h-10 border border-gray-500 focus:shadow-outline focus:outline-none mt-2" placeholder="Your registered email at Online Storage account">
	</div>
	<button type="submit" class="bg-blue-500 text-white rounded px-3 py-2 transition duration-150 ease-in-out hover:bg-blue-600">Submit</button>
</form>
@endsection