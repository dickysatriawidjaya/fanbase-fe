<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>{{$data->web_title}}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="88.0 radio station template">
	<meta name="keywords" content="radio, station, creative, html">
	<!-- Favicon -->
	<link href="{{  env('API_PREFIX').$data->web_logo }}" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{mix('/css/app.css')}}">
	<link href="{{ asset('assets3/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body data-font = "{{$data->web_font}}">
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<!-- Site Logo -->
			<a href="/" class="site-logo">
				<img src="{{ env('API_PREFIX').$data->web_logo }}" alt="">
				<p class="title_site">{{$data->web_title}}</p>
			</a>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			
			<!-- Main Menu -->
			<ul class="main-menu">
				<li class=""><a href="/">Home</a></li>
			@foreach($data->menu as $menu)
				<li><a href="/{{strtolower($menu->category->category_name)}}">{{ $menu->category->category_name}}</a></li>
			@endforeach
				<li><a href="/music">Music</a></li>
				<li><a href="/movie">Movie</a></li>
				<li><a href="/profile">Profile</a></li>
			</ul>
			<!-- Social Links -->
			<!-- <div class="header-social-links">
				<a href=""><i class="fa fa-twitter"></i></a>
				<a href=""><i class="fa fa-soundcloud"></i></a>
				<a href=""><i class="fa fa-instagram"></i></a>
				<a href=""><i class="fa fa-google-plus"></i></a>
				<a href=""><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-youtube-play"></i></a>
			</div> -->
		</div>
	</header>
	<!-- Header section end -->

  @yield('content')

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
{!!$data->web_footer!!}<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
		</div>
	</footer>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('assets3/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets3/js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('assets3/js/bootstrap.min.js') }}"></script>
	<!-- <script src="{{ asset('assets3/js/owl.carousel.min.js') }}"></script> -->
	<script src="{{ asset('assets3/js/circle-progress.min.js') }}"></script>
	<script src="{{ asset('assets3/js/main.js') }}"></script>

	<!-- <script src="{{ asset('assets3/js/wavesurfer.min.js') }}"></script> -->
	<!-- <script src="{{ asset('assets3/js/audio.js') }}"></script> -->

	<script src="{{ asset('assets3/js/custom/template1.js') }}"></script>
	<script>
	$( ".btn_login" ).click(function() {
	  $( ".modal_login" ).show();
	});
	$( ".btn_close" ).click(function() {
	  $( ".modal_login" ).hide();
	});
	document.addEventListener('contextmenu', event => event.preventDefault());

	$( ".detail" ).click(function() {
		var id = $(this).attr('data-id');
		var title = $(this).attr('data-title');
		var category = $(this).attr('data-category');
		window.location.href = "/"+category+"/"+id+"?title="+title;
	});

	if($("body").attr("data-font")){
		let font = $("body").attr("data-font")
		$('body').css("font-family", font);
	}



	</script>

    </body>
</html>
