<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>CFCT |Child Sponsorship Application</title>
	<!-- icons -->
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="assets/css/pages/extra_pages.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/fhlogotwo.png" />
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="/login" method="POST">
                    @csrf()
					<span class="login100-form-logo">
                        <img src="assets/img/fhlogo.png" class="img-fluid" alt="Responsive image">
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
						<a class="txt1" href="/register">
							Register?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/pages/extra_pages/login.js"></script>
	<!-- end js include path -->
</body>

</html>