@extends('template1/menu/menu')
@section('content')


	<!--  section -->
	<section class="page-info-section set-bg" data-setbg="{{ env('API_PREFIX').$data->web_main_banner }}">
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
					<img src="{{ env('API_PREFIX').$data->web_main_banner }}" alt="">
				</div>
				<div class="col-lg-6">
					<div class="ab-content">
						{!!$data->web_profile!!}
					</div>
				</div>
			</div>
			<!-- <div class="row about-box">
				<div class="col-lg-6 ab-push">
					<img src="{{ asset('assets3/img/bg.jpg') }}" alt="">
				</div>
				<div class="col-lg-6 ab-pull">
					<div class="ab-content">
						<p>
							Grup musik ini juga terkenal dengan lirik yang sederhana dan puitis, musik yang mudah di ingat dengan ciri khas suara vokal Ariel.Sekarang grup musik ini hanya terdiri dari: Ariel, Uki, Lukman, dan David.Pada November 2006, Andika dan Indra keluar dari grup musik ini, posisinya digantikan oleh David dan Lucky sebagai additional player. Di pertengahan tahun 2008 David diangkat menjadi personel tetap menyusul masuknya Ihsan Norrachman menggantikan Lucky sebagai additional player, pada tahun 2013 Ihsan yang juga ikut andil dalam pembuatan album seperti seharusnya keluar, posisinya digantikan Boy Tondo. Di awal tahun 2015, Reza mengundurkan diri dari grup musik ini, posisinya lalu digantikan oleh Rio, dan pada Maret 2016, Boy Tondo keluar, posisinya digantikan oleh Lanlan sebagai additional player.
						</p>
					</div>
				</div>
			</div> -->
		</div>
	</section>
	<!--  About section end -->


	<!-- Video preview section -->
	<!-- <section class="video-preview-section set-bg spad" data-setbg="{{ asset('assets3/img/video-preview-bg.jpg') }}">
		<div class="container">
			<div class="vp-content">
				<div class="section-title text-center">
					<h2>Charts</h2>
					<p>Duis ex ex, tristique sit amet dui eget, tincidunt gravida ante. Ut et malesuada nisl, ac vehicula ex.<br> In aliquet arcu sit amet volutpat dignissim. Ut vulputate turpis eget vehicula vestibulum. Morbi ac turpis euismod,<br> consequat lacus eget, molestie libero. Donec in nibh et quam congue elementum </p>
					<a href="#"><img src="{{ asset('assets3/img/icons/youtube.png') }}" alt=""></a>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Video preview section end -->




@endsection
