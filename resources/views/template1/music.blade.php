@extends('template1/menu/menu')
@section('content')

<!--  section -->
<section class="page-info-section set-bg" data-setbg="{{ asset('assets3/img/page-info-bg.jpg') }}">
	<div class="container">
		<div class="section-title text-center">
			<h2>Our Albums</h2>
		</div>
	</div>
</section>
<!--  section end -->


<!-- Blog  section -->
<section class="blog-section">
	<div class="container">
		<div class="row">
			@foreach($data->foto as $c)
			<div class="col-lg-4 col-md-6 foto_detail" data-id = "{{$c->id}}" data-title = "{{$c->title}}">
				<div class="blog-item">
					<div class="blog-image">
						<img src="{{ env('API_PREFIX').$c->physical_path }}" alt="#">
						<!-- <a class="tag">#music</a> -->
					</div>

					<div class="blog-content">
						<div class="date">{{ date("d M Y", strtotime($c->created_at)) }}</div>
						<h4>{{$c->title}}</h4>
						<p>{{$c->description}}</p>
						
						<!-- Trigger/Open The Modal -->
						<!-- The Modal -->
						<div  class="modal modal_login">
							<!-- Modal content -->
							<div class="modal-content">
								<span class="btn_close">&times;</span>
								<p>Please Login</p>
								<button type="button" class="site-btn" name="button">Login</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<!-- <div class="pagination-warp">
		<div class="container">
			<div class="site-pagination">
				<a href=""><i class="fa fa-angle-double-left"></i></a>
				<a href="">1</a>
				<a class="active" href="">2</a>
				<a href="">3</a>
				<a href="">4</a>
				<a href="">5</a>
				<a href="">6</a>
				<a href=""><i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
	</div> -->

</section>
<!--  Blog section end -->



<!-- Footer Top section -->
<!-- <section class="footer-top-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 ft-widget">
				<div class="ft-title">
					<h4>Locations</h4>
				</div>
				<ul>
					<li><a href="">Berlin</a></li>
					<li><a href="">Bucharest</a></li>
					<li><a href="">London</a></li>
					<li><a href="">Budapest</a></li>
					<li><a href="">Tel Aviv</a></li>
					<li><a href="">Moscow</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 ft-widget">
				<div class="ft-title">
					<h4>Top Shows</h4>
				</div>
				<ul class="order-list">
					<li><a href=""><span>1</span>88,8 Weekly Chart</a></li>
					<li><a href=""><span>2</span>Transitions - John Digweed</a></li>
					<li><a href=""><span>3</span>Who’s On Top? with John Doe</a></li>
					<li><a href=""><span>4</span>88,8 News</a></li>
					<li><a href=""><span>5</span>Electronic Worriors</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 ft-widget">
				<div class="ft-title">
					<h4>Blog</h4>
				</div>
				<div class="ft-blog-widget">
					<div class="bw-item">
						<div class="bw-thumb set-bg" data-setbg="{{ asset('assets3/img/blog/thumb/1.jpg') }}"></div>
						<div class="bw-content">
							<p>5 Things to know when you attend a music festival. </p>
							<a href="#">Continue Reading</a>
						</div>
					</div>
					<div class="bw-item">
						<div class="bw-thumb set-bg" data-setbg="{{ asset('assets3/img/blog/thumb/2.jpg') }}"></div>
						<div class="bw-content">
							<p>5 Things to know when you attend a music festival. </p>
							<a href="#">Continue Reading</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 ft-widget">
				<div class="ft-title">
					<h4>Contact</h4>
				</div>
				<div class="ft-contact-widget">
					<p><span>A:</span> 4111 Birch Street, Berlin</p>
					<p><span>T:</span> 317-822-4383</p>
					<p><span>E:</span> office@88point8.com</p>
					<img src="{{ asset('assets3/img/logo.png') }}" class="footer-logo" alt="">
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- Footer Top section end -->


@endsection
