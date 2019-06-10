<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fanbase</title>
    <link rel="icon" href="{{ asset('assets/img/fabicon.png') }}">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Animate CSS -->
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/v-4/main.css') }}" rel="stylesheet">

</head>

<body id="page-top" class="index">


    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <div class="brand-logo"><img src="{{ asset('assets/img/logo-b.png') }}"></div>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Activities</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#features">Features</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="header-text text-left">
                        <h4 class="header-lead-in">Welcome to PokeFans!</h4>
                        <h1 class="header-heading letters type">
                            <span>We are</span>
                            <span class="words-wrapper waiting">
                                <b class="is-visible">Pokémon</b>
                                <b>Pokémon Geeks</b>
                                <b>Pokémon Lovers</b>
                                <b>Awesome</b>
                            </span>
                        </h1>
                        <a href="#services" class="page-scroll btn btn-xl">Explore Services</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- Services Section -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="section-heading">Activities at a PokeFans</h1>
                <h4 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h4>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4 col-sm-6">
                <div class="services-content">
                    <img class="flat-icons wow zoomIn" src="{{ asset('assets/img/icons/icon-1.png') }}" alt="geckpro">
                    <h4>Pokemon Cosplay Expo</h4>
                    <p>Anime Expo 2018 Pokemon Cosplay Gatherings Day 2 and 3</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="services-content">
                    <img class="flat-icons wow zoomIn" src="{{ asset('assets/img/icons/icon-2.png') }}" alt="geckpro">
                    <h4>Blue Ridge Regional Championships – The Costume & Cosplay Contest</h4>
                    <p>Pokemon Costume & Cosplay contest coming May 6th from 9 AM – 3 PM at the Blue Ridge Regional Championship.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="services-content">
                    <img class="flat-icons wow zoomIn" src="{{ asset('assets/img/icons/icon-4.png') }}" alt="geckpro">
                    <h4>Join together with fellow fans for photo ops and camaraderie.</h4>
                    <p>Cosplay gatherings are a great chance to meet people from the same fandom and take some amazing photos together. All of the Cosplay Gatherings at AX are organized by attendees, primarily on the Anime Expo forum on Cosplay.com. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- features 1 -->
<section id="features" class="features features-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 wow fadeInLeft">
                <img src="{{ asset('assets/img/side-2.png') }}" class="img-margin-left" alt="geckpro">
            </div>
            <div class="col-md-6 col-sm-12 text-left">
                <div class="features-content">
                    <div class="features-text">
                        <h1 class="section-heading">Female player character</h1>
                        <h4 class="section-subheading text-muted">Visually appealing, technically perfect and fully responsive. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- features 2 -->
<section class="features features-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-left">
                <div class="features-content">
                    <div class="features-text">
                        <h1 class="section-heading">Elegant & Simple</h1>
                        <h4 class="section-subheading text-muted">Visually appealing, technically perfect and fully responsive. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt.</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 wow fadeInRight">
                <img src="{{ asset('assets/img/side-1.png') }}" class="img-margin-right" alt="geckpro">
            </div>
        </div>
    </div>
</section>

<!-- features All -->
<section class="features features-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="section-heading">All The Featues</h1>
                <h4 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-push-2 col-sm-8 col-sm-push-2 text-left">
                <div class="features-content">
                    <img class="flat-icons wow zoomIn" src="{{ asset('assets/img/icons/icon-5.png') }}" alt="geckpro">
                    <div class="features-text">
                        <h4>Intuitive and Convenience</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-push-2 col-sm-8 col-sm-push-2 text-left">
                <div class="features-content">
                    <img class="flat-icons wow zoomIn" src="{{ asset('assets/img/icons/icon-6.png') }}" alt="geckpro">
                    <div class="features-text">
                        <h4>Simple and Fast</h4>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 col-md-push-2 col-sm-8 col-sm-push-2 text-left">
                <div class="features-content">
                    <img class="flat-icons wow zoomIn" src="{{ asset('assets/img/icons/icon-7.png') }}" alt="geckpro">
                    <div class="features-text">
                        <h4>Social Media Support</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-push-2 col-sm-8 col-sm-push-2 text-left">
                <div class="features-content">
                    <img class="flat-icons wow zoomIn" src="{{ asset('assets/img/icons/icon-8.png') }}" alt="geckpro">
                    <div class="features-text">
                        <h4>Community Support</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 wow fadeInUp text-center">
                <img src="{{ asset('assets/img/side-4.png') }}" class="img-margin-center" alt="geckpro">
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section id="cta-1" class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="section-heading">Youth, Passion and Experience!</h1>
                <h4 class="section-subheading text-muted">Today is a great day to join with us!</h4>
                <a href="#contact" class="page-scroll btn btn-xl btn-white">Contact Us</a>
            </div>
        </div>

        <div class="row text-center"></div>
    </div>
</section>

<!-- Contact Form Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="section-subheading text-muted">We will contact you!</h4>
                <h1 class="section-heading">Leave Your E-mail Address</h1>
            </div>
            <div class="col-md-6 col-md-push-3 col-sm-8 col-sm-push-2 text-center">
                <form name="newsletter" role="form" action="#" method="post">
                    <input type="email" class="form-control text-center" id="InputEmail" placeholder="enter email address here" required>
                    <button type="submit" class="btn btn-xl btn-submit">Send Email</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact-address">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <i class="fa fa-map-marker"></i>
                <h1 class="section-heading">Address</h1>
                <h4 class="section-subheading text-muted">Situ Aksan Permai No. 1000</h4>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <i class="fa fa-phone"></i>
                <h1 class="section-heading">Phone</h1>
                <h4 class="section-subheading text-muted">+62 89 9903 2159</h4>
            </div>
            <div class="col-md-4col-sm-4 text-center">
                <i class="fa fa-envelope"></i>
                <h1 class="section-heading">Email</h1>
                <h4 class="section-subheading text-muted">hello@pokefans.com</h4>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; <span style="color:#ff3366;">P</span>oke<span style="color:#ff3366;">F</span>ans</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <span class="copyright text-right">Designed & Developed by <a href="#">YSA Support and Service</a></span>
            </div>
        </div>
    </div>
</footer>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Modernizr -->
<script src="{{ asset('assets/js/modernizr.custom.12691.js') }}"></script>
<!-- jQuery Version 1.11.0 -->
<script src="{{ asset('assets/js/jquery-1.11.0.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{ asset('assets/js/classie.js') }}"></script>
<script src="{{ asset('assets/js/AnimatedHeader.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mixitup.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/animated-headline.js') }}"></script>

</body>

</html>
