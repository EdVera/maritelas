<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>Maritelas | @yield('title','Admin')</title>

  <!-- CSS  -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('plugins/materialize/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
	<style media="screen">
		#content{
		}
		.chip{
			background-color:#048f7b;
			margin: 20px 100px 0px 100px;
		}
	</style>
  @yield('css')
</head>
<body style="background-color:#fcfcfc;font-family: Lato;">
	@include('admin.templates.nav')
	<div style="padding-left:300px;">
		<section style="margin:auto">
			@if(Session::has('flash_message'))
			    <div class="chip white-text" style="">
						{!! session('flash_message') !!}
						<i class="close material-icons">close</i>
					</div>
			@endif
			<div id="content" style="padding:10px 100px">
					@yield('content-fieldset')
			</div>
		</section>
	</div>

	@yield('addHtml')

</body>

<!--  Scripts-->
	   <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
	   <script src="{{ asset('plugins/materialize/js/materialize.min.js') }}"></script>
	   <script src="{{ asset('js/init.js') }}"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
     <script src="{{ asset('js/scripts.js') }}"></script>
     {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}

		@yield('addscripts')
</html>
