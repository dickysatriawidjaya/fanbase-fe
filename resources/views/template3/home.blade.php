<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
	<meta name="format-detection" content="telephone=no">

	<title>Magic7</title>

	<link rel="shortcut icon" href="{{ asset('assets2/img/fav.ico') }}" type="image/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Roboto:100,300,300italic,400,500,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets2/css/bootstrap-select.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets2/css/jquery.mCustomScrollbar.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
</head>
<body class='light'>

	<div class="preloader" >
		<div class="line-scale-party">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>

	<nav class='main-menu'>
		<ul>
			<li class="active" data-bg-color="#f50057">
				<a href="#main">Home</a>
			</li>
			<li data-bg-color="#55117b">
				<a href="#portfolio">Portfolio</a>
			</li>
			<li data-bg-color="#446420">
				<a href="#about-me">About me</a>
			</li>
			<li data-bg-color="#091d62">
				<a href="#contact">Contact</a>
			</li>
			<li data-bg-color="#00d2ff">
				<a href="typography.html" target="_blank">Typography</a>
			</li>
		</ul>
		<button class="up"><img src="{{ asset('assets2/img/arrow-up.svg') }}" height="7" width="14" alt="#"></button>
		<button class="down"><img src="{{ asset('assets2/img/arrow-down.svg') }}" height="7" width="14" alt="#"></button>
	</nav>
	<main>
		<section id="main" class="main" data-color="#24000d">
			<div class="bg-image">
				<ul id='scene'>
					<li class='layer' data-depth='0.20'>
						<img class="img-responsive" src="{{ asset('assets2/img/main-first-page.jpg') }}" height="638" width="555" alt="#">
					</li>
					<li class='layer name' data-depth='0.40'>
						<img class="img-responsive" src="{{ asset('assets2/img/name.png') }}" height="184" width="487" alt="#">
					</li>
				</ul>
			</div>
			<ul class='social-menu-links'>
				<li><a href="https://www.instagram.com/itembridge/">Instagram</a></li>
				<li><a href="https://www.behance.net/itembridge">Behance</a></li>
				<li><a href="https://www.facebook.com/ItemBridge">Facebook</a></li>
				<li><a href="https://twitter.com/Itembridge">Twitter</a></li>
			</ul>
			<p class="side-copyright">
				©  ItemBridge, llc., 2015
			</p>
		</section>
		<div class="container">
			<section id="portfolio" class="portfolio" data-color="#001c26">
				<h1 class="header-section">header section</h1>
				<ul class="filter-buttons sections-menu-links">
					<li data-filter="*"><a href="#" class="active">All</a></li>
				</ul>
				<div class="row wrapper-port-item">
				</div>

				<div class='open-item'>
					<div class="open-item-nav">
						<div class="next-item">Next project</div>
						<div class="prev-item">Previous project</div>
					</div>

					<div class='open-box'>
						<!-- <button class="close"></button> -->
						<div class="open-box-content"></div>
					</div>

				</div>

			</section>

			<section id="about-me" class="about-me" data-color="#1f0024">
				<div class="bg-image">
					<img src="{{ asset('assets2/img/aboubt_photo.jpg') }}" height="770" width="755" alt="#" style="opacity: 0;">
				</div>
				<h1 class="header-section">header section</h1>
				<div class="row">
					<div class="col-lg-5 about-me-des">
						<p class='bio'>
							Sit aptent placerat morbi pharetra fringilla, pede in mattis taciti to pretium et cras suspendisse eratin turpis integer vulputate value ictumst donec ornare titor ridiculus hendrerit risus pharetra. The Platea ask cubilian rhoncus fames dis aliquet primis.
						</p>
						<div class="signature">
							<img src="{{ asset('assets2/img/signature.png') }}" height="101" width="159" alt="#">
						</div>
					</div>
				</div>
				<div class="row resume">
					<div class="col-lg-4 education">
						<h3 class="header-section">
							Education
						</h3>
						<div class="education-block">
							<h6 class='education-year'>
								2002–2007
							</h6>
							<p class="education-des">
								Ut est facilisi urna. Egestas rhoncus habitasse sellus senectus fames cras nisi pede.
							</p>
						</div>
						<div class="education-block">
							<h6 class='education-year'>
								2007–2009
							</h6>
							<p class="education-des">
								Sit aptent placerat morbi pharetra fringilla, pede into mattis taciti pretium et cras suspendisse erat turpis integer vulputate dictumst.
							</p>
						</div>
						<div class="education-block">
							<h6 class='education-year'>
								2010
							</h6>
							<p class="education-des">
								Platea ac non placerat cubilia rhoncus fames dis aliquet primis vivamus augue justo.
							</p>
						</div>
					</div>
					<div class="col-lg-offset-1 col-lg-3">
						<h3 class="header-section">
							Specialty
						</h3>
						<div class="specialty">
							<h6 class='item' data-item='1'>01. UI / UX Design</h6>
							<p class='description' data-item='1'>
								Sit aptent placerat morbi pharetra into fringilla, pede mattis taciti pretium ets. Cras suspendisse erat turpis is integer vulputate dictumst donec ornare.
							</p>
							<h6 class='item' data-item='2'>
								02. Interaction Design
							</h6>
							<p class='description' data-item='2'>
								Animi unde numquam aperiam soluta, neque ducimus dolores explicabo magni dolorum temporibus dolorem, earum quam rerum optio voluptatem recusandae ab atque perspiciatis.
							</p>
							<h6 class='item' data-item='3'>
								03. Visual Design
							</h6>
							<p class='description' data-item='3'>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat magni quos, ab voluptates.
							</p>
							<h6 class='item' data-item='4'>
								04. Branding
							</h6>
							<p class='description' data-item='4'>
								Accusamus incidunt eveniet doloribus molestiae ducimus dicta ea sunt esse.
							</p>
							<h6 class='item' data-item='5'>
								05. Motion graphics
							</h6>
							<p class='description' data-item='5'>
								Laboriosam necessitatibus consequatur, iusto saepe quisquam nobis.
							</p>
						</div>
					</div>
					<div class="col-lg-offset-1 col-lg-3">
						<h3 class="header-section">
							Skills
						</h3>
						<div class="scills">
							<div class="item" data-skill="60">
								<h6 class='scills-header'>Photoshop</h6>
							</div>
							<div class="item" data-skill="60">
								<h6 class='scills-header'>Illustrator</h6>
							</div>
							<div class="item" data-skill="80">
								<h6 class='scills-header'>After Effects</h6>
							</div>
							<div class="item" data-skill="60">
								<h6 class='scills-header'>Indesign</h6>
							</div>
							<div class="item" data-skill="70">
								<h6 class='scills-header'>HTML / CSS</h6>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<section id="contact" class="contact" data-color="#0b2304">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h1 class="header-section">Contacts</h1>

						<address>
							<p>35 Avenue Montaigne, 75008 Paris, France</p>
							+33 1 44 43 29 00<br/>
							+33 1 44 43 29 29<br/>
						</address>

						<address>
							<a href="mailto:#">info@magic7.fr</a>
						</address>

						<ul class="social-menu-links"></ul>

					</div>

					<div class="col-lg-6">
						<h1 class="header-section forForm">Say hi</h1>
						<div class="form-wrapper">
							<form class="contact-form row">
								<div class="col-xs-12 col-sm-6">
									<span> Please enter your name</span>
									<input type="text" placeholder="Your name" name="name">
								</div>
								<div class="col-xs-12 col-sm-6">
									<span> Please enter a valid email address</span>
									<input type="email" placeholder="Email" name="email">
								</div>
								<div class="col-xs-12">
									<textarea placeholder="Message" name="comment"></textarea>
									<input type="submit" value="Send" class="btn">
								</div>
							</form>
							<div class="envelope">

								<img id="top" src="{{ asset('assets2/img/top-env.svg') }}" alt="#">
								<?xml version="1.0" encoding="utf-8"?>
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="555px" height="310px" viewBox="263 -140 555 310" enable-background="new 263 -140 555 310" xml:space="preserve">
								<path id="Shape_1_copy" fill="#A9CE15" d="M602.8,15.6l0.6-0.8L819,170.2l-0.6,0.8L602.8,15.6z M478.5,15.3l-0.6-0.8L262,170.2
								l0.6,0.8L478.5,15.3z"/>
								<rect x="263" y="-140" fill="none" stroke="#A9CE15" stroke-width="2" stroke-miterlimit="10" width="555" height="310"/>
							</svg>

						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
</main>
<!-- JS files -->
<script src="{{ asset('assets2/js/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('assets2/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets2/js/classList.js') }}"></script>
<script src="{{ asset('assets2/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets2/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets2/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('assets2/js/index.js') }}"></script>
</body>
</html>
