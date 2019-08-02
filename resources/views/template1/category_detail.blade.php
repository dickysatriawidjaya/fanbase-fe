@extends('template1/menu/menu')
@section('content')


	<!--  section -->
	<section class="page-info-section set-bg" data-setbg="{{ asset('assets3/img/page-info-bg.jpg') }}">
		<div class="container">
			<div class="section-title text-center">
				<h2>{{$data->content->title}}</h2>
			</div>
		</div>
	</section>
	<!--  section end -->



	<!--  About section -->
	<section class="about-block-section">
		<div class="container">
			<div class="row about-box">
				<div class="col-lg-6">
					<img src="{{ env('API_PREFIX').$data->content->image_banner }}" alt="">
				</div>
				<div class="col-lg-6">
					<div class="ab-content">
						<!-- <h4>Kangen Band is back</h4> -->
						<p>{!!$data->content->content!!}</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--  About section end -->
	
	<!-- Services section -->
	<section class="services-section">
		<div class="container">
			<div class="row">
        <a href="/news"><button class="back-to-news site-btn">Back</button></a> 
        <div class="header-social-links">
          <a href="https://twitter.com/intent/tweet?url={{url()->current()}}" target="_blank"><i class="fa fa-twitter"></i></a>
		  <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"  target="_blank"><i class="fa fa-facebook"></i></a>
		  <a href="https://twitter.com/intent/tweet?url={{url()->current()}}" target="_blank"><i class="fa fa-twitter">twitter</i></a>
		  <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"  target="_blank"><i class="fa fa-facebook">facebook</i></a>
        </div>
			</div>
		</div>
	</section>
	<!-- Services section end -->


@endsection
