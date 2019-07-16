<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>{{$data->web_title}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{mix('/css/main.css')}}">
		<link href="{{  env('API_PREFIX').$data->web_logo }}" rel="shortcut icon"/>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="/" class="logo"><strong>{{$data->web_title}}</strong></a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							@yield('content')

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li class=""><a href="/">Home</a></li>
										<li><a href="/news">News</a></li>
										<li><a href="/live">Live</a></li>
										<li><a href="/media">Media</a></li>
										<li><a href="/music">Music</a></li>
										<li><a href="/movie">Movie</a></li>
										<li><a href="/profile">Profile</a></li>

									</ul>
								</nav>


							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p></p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
										<li class="icon solid fa-phone">(000) 000-0000</li>
										<li class="icon solid fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">{!!$data->web_footer!!}</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="{{ asset('assets4/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets4/js/browser.min.js') }}"></script>
			<script src="{{ asset('assets4/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('assets4/js/util.js') }}"></script>
			<script src="{{ asset('assets4/js/main.js') }}"></script>
			<script src="{{ asset('assets2/js/scripts.js') }}"></script>
	</body>
</html>
