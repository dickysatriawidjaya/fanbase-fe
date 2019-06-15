@extends('template1/menu/menu')
@section('content')


	<!--  section -->
	<section class="page-info-section set-bg" data-setbg="{{ asset('assets3/img/page-info-bg.jpg') }}">
		<div class="container">
			<div class="section-title text-center">
				<h2>Profile</h2>
			</div>
		</div>
	</section>
	<!--  section end -->



	<!--  About section -->
	<section class="about-block-section">
		<div class="container">
			<div class="row about-box">
				<div class="col-lg-6">
					<img src="{{ asset('assets3/img/about-1.jpg') }}" alt="">
				</div>
				<div class="col-lg-6">
					<div class="ab-content">
						<h4>A short History</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu tincidunt ligula. Fusce dictum ullamcorper purus, at elementum sem sollicitudin non. Sed id tristique lacus. Fusce pellentesque dignissim arcu, id hendrerit urna feugiat vitae. Pellentesque viverra aliquet arcu, vel aliquet est commodo quis. Nam tempus, nisl eu maximus viverra, magna quam porta nibh.</p>
					</div>
				</div>
			</div>
			<div class="row about-box">
				<div class="col-lg-6 ab-push">
					<img src="{{ asset('assets3/img/about-2.jpg') }}" alt="">
				</div>
				<div class="col-lg-6 ab-pull">
					<div class="ab-content">
						<h4>Where?</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu tincidunt ligula. Fusce dictum ullamcorper purus, at elementum sem sollicit udin non. Sed id tristique lacus. Fusce pellentesque dignissim arcu, id hendrerit urna feugiat vitae. Pellentesque viverra aliquet arcu,  aliquet est commodo quis. Nam tempus, nisl eu maximus viverra, magna quam porta nibh.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--  About section end -->


	<!-- Video preview section -->
	<section class="video-preview-section set-bg spad" data-setbg="{{ asset('assets3/img/video-preview-bg.jpg') }}">
		<div class="container">
			<div class="vp-content">
				<div class="section-title text-center">
					<h2>Charts</h2>
					<p>Duis ex ex, tristique sit amet dui eget, tincidunt gravida ante. Ut et malesuada nisl, ac vehicula ex.<br> In aliquet arcu sit amet volutpat dignissim. Ut vulputate turpis eget vehicula vestibulum. Morbi ac turpis euismod,<br> consequat lacus eget, molestie libero. Donec in nibh et quam congue elementum </p>
					<a href="#"><img src="{{ asset('assets3/img/icons/youtube.png') }}" alt=""></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Video preview section end -->


	<!-- Services section -->
	<section class="services-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 service-box">
					<img src="{{ asset('assets3/img/services/1.jpg') }}" alt="">
					<h4>Where?</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu  tincidunt ligula. Fusce dictum ullamcorper purus, at elementum sem sollicit udin non. Sed id tristique lacus. Fusce pellentesque dignissim arcu, id hendrerit urna feugiat vitae. Pellentesque viverra aliquet arcu,  aliquet est commodo quis. Nam tempus, nisl eu maximus viverra, magna quam porta nibh.</p>
					<a href="" class="readmore">MORE INFO</a>
				</div>
				<div class="col-lg-4 col-md-6 service-box">
					<img src="{{ asset('assets3/img/services/2.jpg') }}" alt="">
					<h4>Where?</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu  tincidunt ligula. Fusce dictum ullamcorper purus, at elementum sem sollicit udin non. Sed id tristique lacus. Fusce pellentesque dignissim arcu, id hendrerit urna feugiat vitae. Pellentesque viverra aliquet arcu,  aliquet est commodo quis. Nam tempus, nisl eu maximus viverra, magna quam porta nibh.</p>
					<a href="" class="readmore">MORE INFO</a>
				</div>
				<div class="col-lg-4 col-md-6 service-box">
					<img src="{{ asset('assets3/img/services/3.jpg') }}" alt="">
					<h4>Where?</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu  tincidunt ligula. Fusce dictum ullamcorper purus, at elementum sem sollicit udin non. Sed id tristique lacus. Fusce pellentesque dignissim arcu, id hendrerit urna feugiat vitae. Pellentesque viverra aliquet arcu,  aliquet est commodo quis. Nam tempus, nisl eu maximus viverra, magna quam porta nibh.</p>
					<a href="" class="readmore">MORE INFO</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->


@endsection
