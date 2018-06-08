<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<meta name="description" content="Maritelas es una mercería con sucursales en Querétaro e Irapuato. Telas importadas. Productos únicos. Cursos personalizados.">
	  <title>Maritelas</title>
		<!-- Facebook Pixel Code -->
		<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window,document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			 fbq('init', '1431005490339504');
			fbq('track', 'PageView');
		</script>
		<noscript>
		 <img height="1" width="1" src="https://www.facebook.com/tr?id=1431005490339504&ev=PageView&noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel Code -->
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120136974-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-120136974-1');
		</script>
		<!-- End Google Analytics -->

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

		@include('site.templates.nav')

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
		<script type="text/javascript">
		  var phonelink = document.getElementById('phonelink');
		  phonelink.addEventListener(
		    'click',
		    function() {
			  fbq('track', 'Lead');
		    },
		    false
		  );

			var whatslink = document.getElementById('whatslink');
		  whatslink.addEventListener(
		    'click',
		    function() {
			  fbq('track', 'Lead');
		    },
		    false
		  );

			var whatslinkmini = document.getElementById('whatslinkmini');
		  whatslinkmini.addEventListener(
		    'click',
		    function() {
			  fbq('track', 'Lead');
		    },
		    false
		  );

			var maillink = document.getElementById('maillink');
		  maillink.addEventListener(
		    'click',
		    function() {
			  fbq('track', 'Lead');
		    },
		    false
		  );

			var fblink = document.getElementById('fblink');
		  fblink.addEventListener(
		    'click',
		    function() {
			  fbq('track', 'Lead');
		    },
		    false
		  );

			var iglink = document.getElementById('iglink');
		  iglink.addEventListener(
		    'click',
		    function() {
			  fbq('track', 'Lead');
		    },
		    false
		  );

			var phlink = document.getElementById('phlink');
		  phlink.addEventListener(
		    'click',
		    function() {
			  fbq('track', 'Lead');
		    },
		    false
		  );

			var emlink = document.getElementById('emlink');
		  emlink.addEventListener(
		    'click',
		    function() {
			  fbq('track', 'Lead');
		    },
		    false
		  );

			var maillink = document.getElementById('maillink');
		  maillink.addEventListener(
		    'click',
		    function() {
			  fbq('track', 'Lead');
		    },
		    false
		  );
		</script>
		@yield('addScripts')
	</body>
</html>
