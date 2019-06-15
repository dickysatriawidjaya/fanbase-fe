<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Noah Band FanBase</title>
	<meta charset="UTF-8">
	<meta name="description" content="88.0 radio station template">
	<meta name="keywords" content="radio, station, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{ asset('assets3/img/favicon.ico') }}" rel="shortcut icon"/>

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
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<!-- Site Logo -->
			<a href="home.html" class="site-logo">
				<img src="{{ asset('assets3/img/logo.png') }}" alt="">
			</a>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- Main Menu -->
			<ul class="main-menu">
				<li class=""><a href="/template1">Home</a></li>
				<li><a href="/template1/news">News</a></li>
				<li><a href="/template1/live">Live</a></li>
				<li><a href="/template1/media">Media</a></li>
				<li><a href="/template1/music">Music</a></li>
				<li><a href="/template1/movie">Movie</a></li>
        <li><a href="/template1/store">Store</a></li>
        <li><a href="/template1/lovers">Lovers</a></li>
        <li><a class="login" id="myBtn">Profile</a></li>
        <li><a href="/template1/link">Link</a></li>
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
		<div class="contaoner">
			<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | FanBaseSite is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">YSA Support & Service</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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

	<script src="{{ asset('assets3/js/wavesurfer.min.js') }}"></script>
	<script src="{{ asset('assets3/js/audio.js') }}"></script>

	<script src="{{ asset('assets3/js/costum/template1.js') }}"></script>


    </body>
</html>