@extends('layouts.auth')

@section('content')

<form class="login100-form validate-form" action="{{route('login')}}" method="POST">
	@csrf()
	<span class="login100-form-logo">
		<img src="{{asset('assets/img/fhlogo.png')}}" class="img-fluid" alt="Responsive image">
	</span>
	<span class="login100-form-title p-b-34 p-t-27">
		Log in
	</span>
	<div class="wrap-input100 validate-input" data-validate="Enter username">
		<input class="input100  @error('email') is-invalid @enderror" type="email" name="email" placeholder="email"   value="{{old('email')}}">
		<span class="focus-input100" data-placeholder="&#xf207;">
		</span>
		@error('email')
		<div class="text-danger">{{ $message }}</div>
		@enderror
	  
	</div>
	<div class="wrap-input100 validate-input" data-validate="Enter password">
		<input class="input100  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" value="{{old('password')}}">
		<span class="focus-input100" data-placeholder="&#xf191;"></span>
		@error('password')
		<div class="text-danger">{{ $message }}</div>
		@enderror
	</div>
	<div class="contact100-form-checkbox">
		<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
		<label class="label-checkbox100" for="ckb1">
			Remember me
		</label>
	</div>
	<div class="container-login100-form-btn">
		<button class="login100-form-btn">
			Login
		</button>
	</div>
	<div class="text-center p-t-90">
		<a class="txt1" href="{{route('register')}}">
			Register?
		</a>
	</div>
</form>
@endsection