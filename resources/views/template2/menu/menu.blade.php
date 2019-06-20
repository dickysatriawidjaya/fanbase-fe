<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Be</title>
    <meta name="description">
    <meta name="author">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="content/sciencecentre/images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:1,300,400,400italic,500,600,700,900|Montserrat:1,300,400,400italic,500,600,700,900'>


    <!-- CSS -->
    <link rel='stylesheet' href='{{ asset('assets2/css/global.css') }}'>
    <link rel='stylesheet' href='{{ asset('assets2/css/structure.css') }}'>
    <link rel='stylesheet' href='{{ asset('assets2/css/sciencecentre.css') }}'>
    <link rel='stylesheet' href='{{ asset('assets2/css/custom.css') }}'>
    <link rel="stylesheet" href="{{mix('/css/template2.css')}}">
</head>

<body class="home page-template-default page color-custom style-simple button-flat layout-full-width if-zoom if-border-hide no-content-padding hide-love header-creative header-open minimalist-header-no ab-hide subheader-title-left menu-link-color footer-copy-center mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky be-reg-211">
    <div id="Header_creative">
      <a href="#" class="creative-menu-toggle"><i class="icon-menu-fine"></i></a>
      <div class="creative-wrapper">

        <div id="Top_bar">
          <div class="one clearfix">
            <div class="top_bar_left">
              <div class="logo">
                  <a id="logo" href="index-sciencecentre.html" title="BeScienceCentre - BeTheme" data-height="120" data-padding="40">
                    <img class="logo-main scale-with-grid" src="{{ asset('assets2/images/scicentre-logo.png') }}" data-retina="{{ asset('assets2/images/scicentre-logo-retina.png') }}" data-height="50" alt="scicentre logo" >
                    <img class="logo-sticky scale-with-grid" src="{{ asset('assets2/images/scicentre-logo.png') }}" data-retina="{{ asset('assets2/images/scicentre-logo-retina.png') }}" data-height="51" alt="scicentre logo" >
                    <img class="logo-mobile scale-with-grid" src="{{ asset('assets2/images/scicentre-logo.png') }}" data-retina="{{ asset('assets2/images/scicentre-logo-retina.png') }}" data-height="51" alt="scicentre logo" >
                    <img class="logo-mobile-sticky scale-with-grid" src="{{ asset('assets2/images/scicentre-logo.png') }}" data-retina="{{ asset('assets2/images/scicentre-logo-retina.png') }}" data-height="51" alt="scicentre logo" ></a>
              </div>
              <div class="menu_wrapper">
                <nav id="menu">
                  <ul id="menu-menu" class="menu menu-main">
                    <li class="">
                      <a href="/template2"><span>Home</span></a>
                    </li>
                    <li>
                      <a href="/template2/news"><span>News</span></a>
                    </li>
                    <li>
                      <a href="/template2/live"><span>Live</span></a>
                    </li>
                    <li>
                      <a href="/template2/media"><span>Media</span></a>
                    </li>
                    <li>
                      <a href="/template2/music"><span>Music</span></a>
                    </li>
                    <li>
                      <a href="/template2/movie"><span>Movie</span></a>
                    </li>
                    <li>
                      <a href="/template2/store"><span>Store</span></a>
                    </li>
                    <li>
                      <a href="/template2/lovers"><span>Lovers</span></a>
                    </li>
                    <li>
                      <a href="/template2/profile"><span>Profile</span></a>
                    </li>
                    <li>
                      <a href="/template2/link"><span>Link</span></a>
                    </li>
                    <!-- <li class="menu-item type-custom object-custom">
                      <a target="_blank" href="http://bit.ly/1M6lijQ"><span><span style="color:#2d1aff;"><strong>Buy now</strong></span></span></a>
                    </li> -->
                  </ul>
                </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="Wrapper">
    @yield('content')
    <footer id="Footer" class="clearfix">
      <div class="footer_copy">
        <div class="footer">
          <div class="footerbox">
            <a href="#">Terms of Use </a>
          </div>
          <div class="footerbox">
            <a href="#">Privacy Policy</a>
          </div>
          <div class="footerbox">
            <a href="#">Contact Us</a>
          </div>
          <div class="footerbox">
            <a href="#">Display based on Specified</a>
          </div>
        </div>
        <div class="copyright">
            &copy; 2019 BlackPink FanPage
        </div>
      </div>
    </footer>
</div>
    <div id="Side_slide" class="right dark" data-width="250">
        <div class="close-wrapper">
            <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
        </div>
        <div class="extras">
            <div class="extras-wrapper"></div>
        </div>
        <div class="menu_wrapper"></div>
    </div>
    <div id="body_overlay"></div>

    <!-- JS -->
    <script src="{{ asset('assets2/js/jquery-2.1.4.min.js') }}"></script>

    <script src="{{ asset('assets2/js/mfn.menu.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.plugins.j') }}s"></script>
    <script src="{{ asset('assets2/js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('assets2/js/animations/animations.js') }}"></script>
    <script src="{{ asset('assets2/js/translate3d.js') }}"></script>
    <script src="{{ asset('assets2/js/scripts.js') }}"></script>

</body>

</html>
