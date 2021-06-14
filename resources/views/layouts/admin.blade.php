<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')</title>

	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />

	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('adminka/assets/images/favicon-32x32.png') }}" type="image/png" />

	<link href="{{ asset('adminka/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
	<link href="{{ asset('adminka/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	{{-- <link href="{{ asset('adminka/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.cs') }}s" rel="stylesheet" /> --}}
	<link href="{{ asset('adminka/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('adminka/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('adminka/assets/js/pace.min.js') }}"></script>

	<link rel="stylesheet" href="{{ asset('adminka/assets/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('adminka/assets/css/icons.css') }}" />
	<link rel="stylesheet" href="{{ asset('adminka/assets/css/app.css') }}" />
	<link rel="stylesheet" href="{{ asset('adminka/assets/css/dark-sidebar.css') }}" />
	<link rel="stylesheet" href="{{ asset('adminka/assets/css/dark-theme.css') }}" />

	@stack('styles')

</head>
<body>
	



<!-- wrapper -->
<div class="wrapper">

	@include('admin.includes.left_nav')
	@include('admin.includes.top_header')



	<!--page-wrapper-->
	<div class="page-wrapper">
		<!--page-content-wrapper-->
		<div class="page-content-wrapper">
			<div class="page-content">
			


				@yield('content')



		<!--end row-->
				
	</div>
</div>
<!--end page-content-wrapper-->
</div>




		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
			<p class="mb-0">
				 <a href="{{ route('home.page') }}">Перейти на сайт</a>
			</p>
		</div>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->




	<script src="{{ asset('adminka/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('adminka/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('adminka/assets/js/bootstrap.min.js') }}"></script>

	<script src="{{ asset('adminka/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('adminka/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	{{-- <script src="{{ asset('adminka/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script> --}}

	<script src="{{ asset('adminka/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
	<script src="{{ asset('adminka/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('adminka/assets/plugins/vectormap/jquery-jvectormap-in-mill.js') }}"></script>
	<script src="{{ asset('adminka/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
	<script src="{{ asset('adminka/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js') }}"></script>
	<script src="{{ asset('adminka/assets/plugins/vectormap/jquery-jvectormap-au-mill.js') }}"></script>
	{{-- <script src="{{ asset('adminka/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('adminka/assets/js/index.js') }}"></script> --}}
	<!-- App JS -->
	{{-- <script src="{{ asset('adminka/assets/js/app.js') }}"></script> --}}
	{{-- <script>
		new PerfectScrollbar('.dashboard-social-list');
		new PerfectScrollbar('.dashboard-top-countries');
	</script> --}}


	<link rel="stylesheet" href="{{ asset('adminka/admin_additional.css') }}">


	@stack('scripts')
</body>
</html>