<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>CFCT |Child Sponsorship Application</title>
	<!-- icons -->
	
	<link href="{{asset('assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/plugins/summernote/summernote.css')}}" rel="stylesheet">
	<!-- morris chart -->
	<link href="{{asset('assets/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/material/material.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/material_style.css')}}">
	<!-- animation -->
	<link href="{{asset('assets/css/pages/animate_page.css')}}" rel="stylesheet">
	<!-- Template Styles -->
	<link href="{{asset('assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/theme-color.css')}}" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="{{asset('assets/img/fhlogotwo.png')}}" />
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/flatpicker/flatpickr.min.css')}}">
	   <!-- data tables -->
	   <link href="{{asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
	   type="text/css" />
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
	<div class="page-wrapper">
		
		@include('includes.header')
		<!-- start page container -->
		<div class="page-container">
		
        @include('includes.sidebar')
			<!-- start page content -->
			<div class="page-content-wrapper">
				

                <div class="page-content">
					
                    @yield('content')

                </div>

			</div>
			<!-- end page content -->
			
		</div>
		<!-- end page container -->
		@include('includes.footer')
	</div>
	    @include('includes.scripts')
</body>

</html>