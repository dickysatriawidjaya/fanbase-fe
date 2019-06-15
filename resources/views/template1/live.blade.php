@extends('template1/menu/menu')
@section('content')
	<!--  section -->
	<section class="page-info-section set-bg" data-setbg="{{ asset('assets3/img/page-info-bg.jpg') }}">
		<div class="container">
			<div class="section-title text-center">
				<h2>Live</h2>
			</div>
		</div>
	</section>
	<!--  section end -->

	<!-- Shows  section -->
	<section class="shows-section spad">
		<div class="container">
			<ul class="shows-menu nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Monday</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Tuesday </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Wednesday</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Thurstday</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tab-5" role="tab" aria-controls="tab-5" aria-selected="false">Friday</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tab-6" role="tab" aria-controls="tab-6" aria-selected="false">Saturday</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tab-7" role="tab" aria-controls="tab-7" aria-selected="false">Sunday</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
					<div class="row">
						<div class="col-lg-4 col-md-9 m-md-auto">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/1.jpg') }}" alt="">
								<div class="show-info"><span>10:00 AM</span>TV Show @ ANTV</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-9 m-md-auto">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/2.jpg') }}" alt="">
								<div class="show-info"><span>12:00 PM</span>TV Show @ Indosiar</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-9 m-md-auto">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/3.jpg') }}" alt="">
								<div class="show-info"><span>15:00 AM</span>Radio Show @ Net Tv</div>
							</div>
						</div>
					</div>
					<div class="text-center pt-5">
						<button class="site-btn">LOAD MORE</button>
					</div>
				</div>
				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
					<div class="row">
						<div class="col-lg-4 col-md-9 m-md-auto">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/1.jpg') }}" alt="">
								<div class="show-info"><span>10:00 AM</span>Radio Show @ 88.8FM</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-9 m-md-auto">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/2.jpg') }}" alt="">
								<div class="show-info"><span>12:00 AM</span>Offair Show @ Plaza Indonesia</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-9 m-md-auto">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/3.jpg') }}" alt="">
								<div class="show-info"><span>15:00 AM</span>Offair Show @ Ancol</div>
							</div>
						</div>
					</div>
					<div class="text-center pt-5">
						<button class="site-btn">LOAD MORE</button>
					</div>
				</div>
				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
					<div class="row">
						<div class="col-lg-4">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/1.jpg') }}" alt="">
								<div class="show-info"><span>10:00 AM</span>Offair Show @ Ancol</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/2.jpg') }}" alt="">
								<div class="show-info"><span>03:00 PM</span>Offair Show @ Marina Beach Ancol</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
					<div class="row">
						<div class="col-lg-4">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/1.jpg') }}" alt="">
								<div class="show-info"><span>10:00 AM</span>Radio Show</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/2.jpg') }}" alt="">
								<div class="show-info"><span>11:00 AM</span>Radio Show</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/3.jpg') }}" alt="">
								<div class="show-info"><span>13:00 PM</span>Radio Show</div>
							</div>
						</div>
					</div>
					<div class="text-center pt-5">
						<button class="site-btn">LOAD MORE</button>
					</div>
				</div>
				<div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab-5">
					<div class="row">
						<div class="col-lg-4">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/2.jpg') }}" alt="">
								<div class="show-info"><span>08:00 AM</span>Radio Show</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/3.jpg') }}" alt="">
								<div class="show-info"><span>09:00 AM</span>Breakfast Show</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="tab-6" role="tabpanel" aria-labelledby="tab-5">
					<div class="row">
						<div class="col-lg-4 col-md-9 m-md-auto m-lg-0">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/1.jpg') }}" alt="">
								<div class="show-info"><span>11:00 AM</span>TV Show</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/2.jpg') }}" alt="">
								<div class="show-info"><span>12:00 PM</span>Breakfast Radio Show</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/3.jpg') }}" alt="">
								<div class="show-info"><span>08:00 PM</span>Breakfast Radio Show</div>
							</div>
						</div>
					</div>
					<div class="text-center pt-5">
						<button class="site-btn">LOAD MORE</button>
					</div>
				</div>
				<div class="tab-pane fade" id="tab-7" role="tabpanel" aria-labelledby="tab-7">
					<div class="row">
						<div class="col-lg-4">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/1.jpg') }}" alt="">
								<div class="show-info"><span>08:00 AM</span>Streaming Show</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/2.jpg') }}" alt="">
								<div class="show-info"><span>10:00 AM</span>TV Show</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="show-item">
								<img src="{{ asset('assets3/img/shows/3.jpg') }}" alt="">
								<div class="show-info"><span>02:00 PM</span>Radio Show</div>
							</div>
						</div>
					</div>
					<div class="text-center pt-5">
						<button class="site-btn">LOAD MORE</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Shows  section end -->

@endsection
