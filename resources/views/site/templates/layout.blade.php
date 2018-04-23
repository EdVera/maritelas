<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	  <title>Maritelas</title>
	  <!-- CSS  -->
		<link rel="shortcut icon" href="{{ asset('img/logo/favico.png') }}">
		<link href="https://fonts.googleapis.com/css?family=Mallanna|Mandali|Nunito:200,300,400,600,700,800,900" rel="stylesheet">
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

		@if (Route::currentRouteName() == 'site.blog')
			@include('site.templates.navblog')
		@else
			@include('site.templates.nav')
		@endif

		@yield('body-content')

		@include('site.templates.footer')

		<!--  Start [CSS]-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" async>
		<!--  End [CSS]-->

		<!--  Scripts-->
		<script src="{{ asset('plugins/jquery/jquery2.min.js') }}"></script>
		<script src="{{ asset('plugins/materialize/js/materialize.min.js') }}"></script>
		<script src="{{ asset('js/init.js') }}"></script>
		<script src="{{ asset('plugins/slick/slick.js') }}"></script>
		<script src="{{ asset('js/initslick.js') }}"></script>
		@yield('addScripts')
	</body>
</html>
