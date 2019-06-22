@extends('template1/menu/menu')
@section('content')
<!-- {{env('API_PREFIX').$data->web_main_banner}} -->
	<!-- Hero section -->
	<?php
	 $web_banner = str_replace('\b','/b',env('API_PREFIX').$data->web_main_banner);
	//  echo $web_banner;
	?>
	<section class="hero-section" style="background-image:url({{$web_banner}})">

		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="container">
					<span>UP NEXT</span>
					<h2>DJ Khaled Exclusive Interview</h2>
				</div>
			</div>
			<div class="hs-item">
				<div class="container">
					<span>UP NEXT</span>
					<h2>David Guetta Exclusive Interview</h2>
				</div>
			</div>
			<div class="hs-item">
				<div class="container">
					<span>UP NEXT</span>
					<h2>Dj snake Exclusive Track</h2>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- promotion section -->
	<section class="promotion-section">
		<div class="container">
			<div class="row">
					<div class="col-md-4">
						<a href="/music">
							<div class="promo-box set-bg" data-setbg="{{ asset('assets3/img/promo/1.jpg') }}">
								<h2>Music</h2>
							</div>
						</a>
					</div>
				<div class="col-md-4">
					<a href="/movie">
						<div class="promo-box set-bg" data-setbg="{{ asset('assets3/img/promo/2.jpg') }}">
							<h2>Movie</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="/media">
						<div class="promo-box set-bg" data-setbg="{{ asset('assets3/img/promo/3.jpg') }}">
							<h2>Media</h2>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- promotion section end -->


	<!-- Latest Podcast section -->
	<!-- <section class="latest-podcast-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Latest Album</h2>
			</div>
			<div class="new-project-player">
				<div class="row">
					<div class="col-lg-4 albam-preview">
						<img src="{{ asset('assets3/img/albam.jpg') }}" alt="">
					</div>
					<div class="col-lg-8">
						<div class="track-name">Sings Legends</div>
						<div class="audio-wave">
							<div id="audiowave"></div>
						</div>
						<div id="cliptime"></div>
						<button id="play" class="site-btn" onclick="wavesurfer.playPause();">LISTEN LIVE</button>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Latest Podcast section end -->


	<!-- Charts section -->
	<!-- <section class="charts-section">
		<div class="container">
			<div class="section-title text-center">
				<h2>Charts</h2>
			</div>
		</div>
		<div class="charts-warp set-bg" data-setbg="{{ asset('assets3/img/chart-bg.jpg') }}">
			<div class="container">
				<img src="{{ asset('assets3/img/logo-big.png') }}" alt="">
			</div>
		</div>
	</section> -->
	<!-- Charts section end -->
@endsection
