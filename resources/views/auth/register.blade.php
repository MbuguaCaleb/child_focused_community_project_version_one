@extends('layouts.auth')

@section('content')

<form class="login100-form validate-form" action="{{route('register')}}" method="POST">
	@csrf()
	<span class="login100-form-logo">
		<img src="{{asset('assets/img/fhlogo.png')}}" class="img-fluid" alt="Responsive image">
	</span>
	<span class="login100-form-title p-b-34 p-t-27">
		Registration
	</span>
	<div class="row">
		<div class="col-lg-6 p-t-20">
			<div class="wrap-input100 validate-input" data-validate="Enter username">
				<input class="input100   @error('username') is-invalid @enderror" type="text" name="username" placeholder="Username" autocomplete="off">
				<span class="focus-input100" data-placeholder="&#xf207;"></span>
				@error('username')
			   <div class="text-danger">{{ $message }}</div>
				@enderror
			</div>
		</div>
		<div class="col-lg-6 p-t-20">
			<div class="wrap-input100 validate-input" data-validate="Enter email">
				<input class="input100   @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" autocomplete="off">
				<span class="focus-input100" data-placeholder="&#xf207;"></span>
				@error('email')
				<div class="text-danger">{{ $message }}</div>
				@enderror
			</div>
		</div>
	  
		
		<div class="col-lg-6 p-t-20">
			<div class="wrap-input100 validate-input" data-validate="Enter password">
				<input class="input100  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password"  id="password" >
				<span class="focus-input100" data-placeholder="&#xf191;"></span>
			   
			</div>
			@error('password')
			<div class="text-danger">{{ $message }}</div>
			@enderror
		</div>
		<div class="col-lg-6 p-t-20">
			<div class="wrap-input100 validate-input" data-validate="Enter password again">
				<input class="input100 @error('confirmed') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Confirm password" id="password_confirmation" >
				<span class="focus-input100" data-placeholder="&#xf191;"></span>
			   
			</div>
			@error('confirmed')
			<div class="text-danger">{{ $message }}</div>
			@enderror
		</div>
		<div class="col-lg-12 p-t-20">
			<div class="wrap-input100  @error('role') is-invalid @enderror">
			   
				<select name="role" id="role" class="form-control">
					<option>Please Select Your Category</option>
					<option>House Head </option>
					<option>Sponsor</option>
					@error('role')
					<div class="text-danger">{{ $message }}</div>
					@enderror
				   
				</select>
			</div>
		</div>
	</div>
	<div class="contact100-form-checkbox">
		<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
		<label class="label-checkbox100" for="ckb1">
			Remember me
		</label>
	</div>
	<div class="container-login100-form-btn">
		<button class="login100-form-btn">
			Sign Up
		</button>
	</div>
	<div class="text-center p-t-90">
		<a class="txt1" href="{{route('login')}}">
			You already have a membership?
		</a>
	</div>
</form>
@endsection