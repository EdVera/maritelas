<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	  <title>Maritelas</title>
	  <!-- CSS  -->
		<link rel="shortcut icon" href="{{ asset('img/logo/favico.jpg') }}">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link href="{{ asset('css/w3.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <link href="{{ asset('plugins/materialize/css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="{{ asset('plugins/slick/slick-theme.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="{{ asset('plugins/slick/slick.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="{{ asset('css/layoutsite.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="{{ asset('css/home.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
		<!-- JS  -->
		<script src="{{ asset('plugins/fontawesome/fontawesome.min.js') }}"></script>
		@yield('addCSS')
	</head>
	<body>

		@include('site.templates.nav')

		@yield('body-content')

		@include('site.templates.footer')

		<!--  Start [CSS]-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" async>
		<!--  End [CSS]-->
		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="{{ asset('plugins/materialize/js/materialize.min.js') }}"></script>
		<script src="{{ asset('js/init.js') }}"></script>
		<script src="{{ asset('plugins/slick/slick.js') }}"></script>
		<script src="{{ asset('js/initslick.js') }}"></script>
		@yield('addScripts')
	</body>
</html>
