@extends('template1/menu/menu')
@section('content')
	<!--  section -->
	<section class="page-info-section set-bg" data-setbg="{{ asset('assets3/img/page-info-bg.jpg') }}">
		<div class="container">
			<div class="section-title text-center">
				<h2>{{strtoupper($data->content[0]->category->category_name)}}</h2>
			</div>
		</div>
	</section>
	<!--  section end -->

	<!-- Shows  section -->
	<section class="shows-section spad">
		<div class="container">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
					<div class="row">
					@foreach($data->content as $c)
						<div class="col-lg-4 col-md-9 m-md-auto detail" data-category = "{{strtolower($c->category->category_name)}}" data-id = "{{$c->id}}" data-title = "{{$c->title}}">
							<div class="show-item">
								<img src="{{ env('API_PREFIX').$c->image_banner }}" alt="">
								<div class="show-info"><span>{{$c->tag}} {{ date("d M Y", strtotime($c->created_at))}}</span>{{$c->title}}</div>
							</div>
						</div>
					@endforeach
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

