<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	
	 
	<title>@yield('title')</title>
	<link rel="shortcut icon" href="{{ asset('img/fav.svg') }}">

	<meta name="keywords" content="{{ $meta->keywords ?? '' }}">
	<meta name="description" content="{{ $meta->description ?? '' }}">
	<meta name="author" content="{{ $meta->author ?? '' }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">

 
	<meta property="og:title" content="{{ $meta->ogtitle ?? '' }}" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="images/og.jpg" />
	<meta property="og:image:width" content="600" />
	<meta property="og:image:height" content="600" />

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 


	<link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css?v=1') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css?v=1') }}">
	<link rel="stylesheet" href="{{ asset('css/fotorama.css?v=1') }}">

	<link rel="stylesheet" href="{{ asset('css/hotel-datepicker.css?v=1') }}">

	@stack('styles')

	<link rel="stylesheet" href="{{ asset('css/additonal.css?v=1') }}">
	

</head>
<body>

 

	@include('pages.includes.top_nav')

		@yield('content')

	@include('pages.includes.footer')

	<div class="madeBy">
		<a href="https://vjvgroup.ru/" target="_blank">Разработано it-компанией <span>vjv-group</span></a>
		<a href="https://vjvgroup.ru/" target="_blank" class="vjvLogo"><img src="{{ asset('img/logo-vjv.svg') }}" alt=""></a>
	</div>
	

 


	<script src="{{ asset('js/jquery-3.6.0.min.js?v=1') }}"></script>
	<script src="{{ asset('js/jquery.maskedinput.min.js?v=1') }}"></script>
	<script src="{{ asset('js/fotorama.js?v=1') }}"></script>
	<script src="{{ asset('js/fecha.min.js?v=1') }}"></script>
	<script src="{{ asset('js/hotel-datepicker.min.js?v=1') }}"></script>
	<script src="{{ asset('js/myjs.js?v=1') }}"></script>
	<script src="{{ asset('js/cleanjs.js?v=1') }}"></script>

	@stack('scripts')
</body>
</html>