<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="_nK">
    <title>GODLIKE </title>
    <link rel="icon" type="image/png" href="{{ asset('assets1/images/favicon.png') }}">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,400i,700%7cMarcellus+SC" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('assets1/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- FontAwesome -->
    <script defer src="{{ asset('assets1/vendor/fontawesome-free/js/all.js') }}"></script>
    <script defer src="{{ asset('assets1/vendor/fontawesome-free/js/v4-shims.js') }}"></script>

    <!-- IonIcons -->
    <link href="{{ asset('assets1/vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{ asset('assets1/vendor/revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/vendor/revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/vendor/revolution/css/navigation.css') }}">

    <!-- Flickity -->
    <link rel="stylesheet" href="{{ asset('assets1/vendor/flickity/dist/flickity.min.css') }}">

    <!-- Photoswipe -->
    <link rel="stylesheet" href="{{ asset('assets1/vendor/photoswipe/dist/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/vendor/photoswipe/dist/default-skin/default-skin.css') }}">

    <!-- DateTimePicker -->
    <link rel="stylesheet" href="{{ asset('assets1/vendor/jquery-datetimepicker/build/jquery.datetimepicker.min.css') }}">

    <!-- Summernote -->
    <link rel="stylesheet" href="{{ asset('assets1/vendor/summernote/dist/summernote-bs4.css') }}">

    <!-- GODLIKE -->
    <link rel="stylesheet" href="{{ asset('assets1/css/godlike.css') }}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('assets1/css/custom.css') }}">

    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="{{ asset('assets1/vendor/jquery/dist/jquery.min.js') }}"></script>

</head>

<!--
    Additional Classes:
        .nk-page-boxed
-->

<body>
  <!-- START: Page Preloader -->
  <div class="nk-preloader">
      <!--
       Preloader animation
       data-close-... data used for closing preloader
       data-open-...  data used for opening preloader
  -->
      <div class="nk-preloader-bg" style="background-color: #000;" data-close-frames="23" data-close-speed="1.2" data-close-sprites="{{ asset('assets1/images/preloader-bg.png') }}" data-open-frames="23" data-open-speed="1.2" data-open-sprites="{{ asset('assets1/images/preloader-bg-bw.png') }}"></div>

      <div class="nk-preloader-content">
          <div>
              <img class="nk-img" src="{{ asset('assets1/images/logo.svg') }}" alt="GodLike - Gaming Bootstrap 4 Template" width="170">
              <div class="nk-preloader-animation"></div>
          </div>
      </div>

      <div class="nk-preloader-skip">Skip</div>
  </div>
  <!-- END: Page Preloader -->

  <!--
  START: Page Video Background

  Additional Attributes:
      data-video - Youtube/Vimeo/self-hosted video urls.
          self-hosted video example:
          data-video="mp4:./video/local-video.mp4,webm:./video/local-video.webm,ogv:./video/local-video.ogv"
      data-video-loop - loop video (true/false)
      data-video-mute - mute video music (true/false)
      data-video-volume - volume of video music (0-100)
      data-video-start-time - video start time in seconds
      data-video-end-time - video end time in seconds
      data-video-pause-on-page-leave - pause video when the page not in focus (true/false)
-->
  <div class="nk-page-background op-5" data-video="https://youtu.be/UkeDo1LhUqQ" data-video-loop="true" data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0" data-video-pause-on-page-leave="true" style="background-image: url(" {{ asset( 'assets1/images/page-background.jpg') }} ");"></div>
  <!-- END: Page Background -->

  <!--
  START: Page Audio Background

  Additional Attributes:
      data-audio - URL to audio file
      data-audio-volume - audio volume (0-100)
      data-audio-autoplay - autoplay audio (true/false)
      data-audio-loop - loop audio (true/false)
      data-audio-pause-on-page-leave - pause video when the page not in focus (true/false)
-->
  <div class="nk-page-background-audio d-none" data-audio="{{ asset('assets1/mp3/purpleplanetmusic-desolation.mp3') }}" data-audio-volume="100" data-audio-autoplay="true" data-audio-loop="true" data-audio-pause-on-page-leave="true"></div>
  <!-- END: Page Background -->

  <!-- START: Page Border -->
  <div class="nk-page-border">
      <div class="nk-page-border-t"></div>
      <div class="nk-page-border-r"></div>
      <div class="nk-page-border-b"></div>
      <div class="nk-page-border-l"></div>
  </div>
  <!-- END: Page Border -->

  <!--
  START: Navbar

  Additional Classes:
      .nk-navbar-lg
      .nk-navbar-align-center
      .nk-navbar-align-right
      .nk-navbar-overlay-content
      .nk-navbar-light
      .nk-navbar-no-link-effect
-->
  <nav class="nk-navbar nk-navbar-side nk-navbar-left nk-navbar-lg nk-navbar-align-center nk-navbar-overlay-content" id="nk-navbar-left">
    <div class="nano">
        <div class="nano-content">
            <div class="nk-nav-table">
              <div class="nk-nav-row">

              <a href="/" class="nk-nav-logo">
                  <img src="{{ asset('assets1/images/logo.svg') }}" alt="" width="130">
              </a>

              <ul class="nk-nav-icons">
                  <li>
                      <a href="#" class="nk-search-toggle no-link-effect">
                          <span class="nk-icon-search"></span>
                      </a>
                  </li>

                  <li>
                      <a href="#" class="nk-cart-toggle no-link-effect">
                          <span class="nk-icon-toggle">
                          <span class="nk-icon-toggle-front">
                              <span class="ion-android-cart"></span>
                          <span class="nk-badge">8</span>
                          </span>
                          <span class="nk-icon-toggle-back">
                              <span class="nk-icon-close"></span>
                          </span>
                          </span>
                      </a>
                  </li>

                  <li>
                      <a href="#" class="nk-sign-toggle no-link-effect">
                          <span class="nk-icon-toggle">
                          <span class="nk-icon-toggle-front">
                              <span class="fa fa-sign-in"></span>
                          </span>
                          <span class="nk-icon-toggle-back">
                              <span class="nk-icon-close"></span>
                          </span>
                          </span>
                      </a>
                  </li>
              </ul>
          </div>
          <!--
          START: Navigation

          Additional Classes:
              .nk-nav-row-top
              .nk-nav-row-center
              .nk-nav-row-bottom
      -->
          <div class="nk-nav-row nk-nav-row-full nk-nav-row-center">
              <ul class="nk-nav" data-nav-mobile="#nk-nav-mobile">
                  <li class="active">
                    <a href="/">Home</a>
                  </li>
                  <li class="">
                    <a href="/promo">Game Promo</a>
                  </li>
                  <li class=" nk-drop-item">
                    <a href="#">Gallery</a>
                    <ul class="dropdown">
                      <li class=" nk-drop-item">
                          <a href="">Tetembakan</a>
                          <ul class="dropdown">
                              <li class="">
                                  <a href="/galpubg">PUBG</a>
                              </li>
                              <li class="">
                                  <a href="/galapex">Apex Legends</a>
                              </li>
                          </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="">
                    <a href="/newslist">News</a>
                  </li>
              </ul>
          </div>
          <!--
          END: Navigation
      -->
          <div class="nk-nav-row">
              <div class="nk-nav-footer">
                  &copy; 2018 nK Group Inc. Developed in association with LoremInc. IpsumCompany, SitAmmetGroup, CumSit and related logos are registered trademarks. All Rights Reserved.
              </div>
          </div>
      </div>
  </div>
</div>
</nav>
<!-- END: Navbar -->

<!-- START: Navigation Toggler -->
<ul class="nk-nav-toggler-right">

</ul>

<ul class="nk-nav-toggler-left">
<li class="d-lg-none">
  <span class="nk-btn nk-btn-lg nk-btn-icon" data-nav-toggle="#nk-nav-mobile">
  <span class="icon">
      <span class="nk-icon-burger">
          <span class="nk-t-1"></span>
  <span class="nk-t-2"></span>
  <span class="nk-t-3"></span>
  </span>
  </span>
  </span>
</li>
</ul>

<!-- END: Navigation Toggler -->

<!--
START: Navbar Mobile

Additional Classes:
.nk-navbar-left-side
.nk-navbar-right-side
.nk-navbar-lg
.nk-navbar-overlay-content
.nk-navbar-light
.nk-navbar-no-link-effect
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content d-lg-none">
<div class="nano">
  <div class="nano-content">
      <a href="/" class="nk-nav-logo">
          <img src="{{ asset('assets1/images/logo.svg') }}" alt="" width="90">
      </a>
      <div class="nk-navbar-mobile-content">
          <ul class="nk-nav">
              <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
          </ul>
      </div>
  </div>
</div>
</div>
<!-- END: Navbar Mobile -->
    @yield('content')
    <!-- START: Footer -->
    <!--
    Additional Classes:
        .nk-footer-parallax
        .nk-footer-parallax-opacity
    -->
    <footer class="nk-footer nk-footer-parallax nk-footer-parallax-opacity">
        <img class="nk-footer-top-corner" src="{{ asset('assets1/images/footer-corner.png') }}" alt="">

        <div class="container">
            <div class="nk-gap-2"></div>
            <div class="nk-footer-logos">
                <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img" src="{{ asset('assets1/images/footer-logo-godlike.png') }}" alt="" width="120"></a>
                <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img" src="{{ asset('assets1/images/footer-logo-yp3.png') }}" alt="" width="120"></a>
                <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img" src="{{ asset('assets1/images/footer-logo-nk-team.png') }}" alt="" width="150"></a>
                <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img" src="{{ asset('assets1/images/footer-logo-pegi-18.png') }}" alt="" width="46"></a>
                <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img" src="{{ asset('assets1/images/footer-logo-18-restricted.png') }}" alt="" width="160"></a>
            </div>
            <div class="nk-gap"></div>

            <p>
                &copy; 2018 nK Group Inc. Developed in association with LoremInc. IpsumCompany, SitAmmetGroup, CumSit and related logos are registered trademarks. GodLike and related logos are registered trademarks or trademarks of id Software LLC in the U.S. and/or other countries. All other trademarks or trade names are the property of their respective owners. All Rights Reserved.
            </p>
            <p>
                GodLike &reg;: The Darkness&trade; is a fowl beginning there Over had moveth so land wherein, fruit very gathering of, female creepeth. Dominion above sea gathered unto whales. Subdue to, have Life fowl firmament wherein. Great air without for, great him he That let earth together thing sea fly gathering. Air whose. Green in face tree to spirit life. Place stars. It two. Deep seed man isn't third. Own he is may had darkness waters you'll forth fifth their don't also fruitful be years in spirit to tree. Sixth fourth open female.
            </p>

            <div class="nk-footer-links">
                <a href="#" class="link-effect">Terms of Service</a> <span>|</span> <a href="#" class="link-effect">Privacy Policy</a>
            </div>

            <div class="nk-gap-4"></div>
        </div>
    </footer>
    <!-- END: Footer -->

    </div>

    <!--
    START: Share Buttons
        .nk-share-buttons-left
    -->
    <div class="nk-share-buttons d-none d-md-flex">
    <ul>
        <li>
            <span class="nk-share-icon" title="Share page on Facebook" data-share="facebook">
                <span class="icon fa fa-facebook"></span>
            </span>
            <span class="nk-share-name">Facebook</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on Twitter" data-share="twitter">
                <span class="icon fa fa-twitter"></span>
            </span>
            <span class="nk-share-name">Twitter</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on Google+" data-share="google-plus">
                <span class="icon fa fa-google-plus"></span>
            </span>
            <span class="nk-share-name">Google Plus</span>
        </li>
        <!--
        <li>
            <span class="nk-share-icon" title="Share page on Pinterest" data-share="pinterest">
                <span class="icon fa fa-pinterest"></span>
            </span>
            <span class="nk-share-name">Pinterest</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on LinkedIn" data-share="linkedin">
                <span class="icon fa fa-linkedin"></span>
            </span>
            <span class="nk-share-name">LinkedIn</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on VK" data-share="vk">
                <span class="icon fa fa-vk"></span>
            </span>
            <span class="nk-share-name">Vkontakte</span>
        </li>
        -->
    </ul>
    </div>

    <!--
    START: Side Buttons
        .nk-side-buttons-visible
    -->
    <div class="nk-side-buttons">
    <ul>
        <li>
            <a href="https://nkdev.info" target="_blank" class="nk-btn nk-btn-lg link-effect-4">Keep in Touch</a>
        </li>
        <li>
            <span class="nk-btn nk-btn-lg nk-btn-icon nk-bg-audio-toggle">
                <span class="icon">
                    <span class="ion-android-volume-up nk-bg-audio-pause-icon"></span>
            <span class="ion-android-volume-off nk-bg-audio-play-icon"></span>
            </span>
            </span>
        </li>
        <li class="nk-scroll-top">
            <span class="nk-btn nk-btn-lg nk-btn-icon">
                <span class="icon ion-ios-arrow-up"></span>
            </span>
        </li>
    </ul>
    </div>
    <!-- END: Side Buttons -->

    <!--
    START: Search

    Additional Classes:
        .nk-search-light
    -->
    <div class="nk-search">
    <div class="container">
        <form action="#">
            <fieldset class="form-group nk-search-field">
                <input type="text" class="form-control" id="searchInput" placeholder="Search..." name="s">
                <label for="searchInput"><i class="ion-ios-search"></i></label>
            </fieldset>
        </form>
    </div>
    </div>
    <!-- END: Search -->

    <!--
    START: Shopping Cart

    Additional Classes:
        .nk-cart-light
    -->
    <div class="nk-cart">
    <div class="nk-gap-2"></div>
    <div class="container">
        <div class="nk-store nk-store-cart">
            <div class="table-responsive">
                <table class="table nk-store-cart-products">
                    <tbody>

                        <tr>
                            <td class="nk-product-cart-thumb">
                                <a href="store-product.html" class="nk-post-image">
                                    <img src="{{ asset('assets1/images/product-2-sm.png') }}" alt="Men Tshirt" class="nk-img">
                                </a>
                            </td>
                            <td class="nk-product-cart-title">
                                <h2 class="nk-post-title h5">
                                        <a href="store-product.html">Men Tshirt</a>
                                    </h2>
                            </td>
                            <td class="nk-product-cart-price">$67.00</td>
                            <td class="nk-product-cart-quantity">
                                1
                            </td>
                            <td class="nk-product-cart-total">
                                $67.00
                            </td>
                            <td class="nk-product-cart-remove"><a href="#"><span class="ion-trash-b"></span></a></td>
                        </tr>

                        <tr>
                            <td class="nk-product-cart-thumb">
                                <a href="store-product.html" class="nk-post-image">
                                    <img src="{{ asset('assets1/images/product-4-sm.png') }}" alt="Men Hoodie" class="nk-img">
                                </a>
                            </td>
                            <td class="nk-product-cart-title">
                                <h2 class="nk-post-title h5">
                                        <a href="store-product.html">Men Hoodie</a>
                                    </h2>
                            </td>
                            <td class="nk-product-cart-price">$125.00 <del>$145.00</del></td>
                            <td class="nk-product-cart-quantity">
                                2
                            </td>
                            <td class="nk-product-cart-total">
                                $250.00
                            </td>
                            <td class="nk-product-cart-remove"><a href="#"><span class="ion-trash-b"></span></a></td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="nk-gap-2"></div>
            <div class="nk-cart-total">
                Total <span>$317</span>
            </div>

            <div class="nk-gap-3"></div>
            <div class="nk-cart-btns">
                <a href="#" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                    Go to Checkout
                </a> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" class="nk-btn nk-btn-lg link-effect-4 nk-cart-toggle">
                    Continue Shopping
                </a>
            </div>
        </div>
    </div>
    <div class="nk-gap-5"></div>
    </div>
    <!-- END: Shopping Cart -->

    <!--
    START: Sign Form

    Additional Classes:
        .nk-sign-form-light
    -->
    <div class="nk-sign-form">
    <div class="nk-gap-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3">
                <div class="nk-sign-form-container">
                    <div class="nk-sign-form-toggle h3">
                        <a href="#" class="nk-sign-form-login-toggle active">Log In</a>
                        <a href="#" class="nk-sign-form-register-toggle">Register</a>
                    </div>
                    <div class="nk-gap-2"></div>

                    <!-- START: Login Form -->
                    <form class="nk-sign-form-login active" action="#">
                        <input class="form-control" type="text" placeholder="Username or Email">
                        <div class="nk-gap-2"></div>

                        <input class="form-control" type="password" placeholder="Password">
                        <div class="nk-gap-2"></div>

                        <div class="form-check float-left">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"> Remember Me
                            </label>
                        </div>
                        <button class="nk-btn nk-btn-color-white link-effect-4 float-right">Log In</button>

                        <div class="clearfix"></div>
                        <div class="nk-gap-1"></div>
                        <a class="nk-sign-form-lost-toggle float-right" href="#">Lost Password?</a>
                    </form>
                    <!-- END: Login Form -->

                    <!-- START: Lost Password Form -->
                    <form class="nk-sign-form-lost" action="#">
                        <input class="form-control" type="text" placeholder="Username or Email">
                        <div class="nk-gap-2"></div>

                        <button class="nk-btn nk-btn-color-white link-effect-4 float-right">Get New Password</button>
                    </form>
                    <!-- END: Lost Password Form -->

                    <!-- START: Register Form -->
                    <form class="nk-sign-form-register" action="#">
                        <input class="form-control" type="text" placeholder="Username">
                        <div class="nk-gap-2"></div>

                        <input class="form-control" type="email" placeholder="Email">
                        <div class="nk-gap-2"></div>

                        <div class="float-left">A password will be emailed to you.</div>
                        <button class="nk-btn nk-btn-color-white link-effect-4 float-right">Register</button>
                    </form>
                    <!-- END: Register Form -->
                </div>
            </div>
        </div>
    </div>
    <div class="nk-gap-5"></div>
    </div>
    <!-- END: Sign Form -->
    <!-- START: Scripts -->

    <!-- Object Fit Polyfill -->
    <script src="{{ asset('assets1/vendor/object-fit-images/dist/ofi.min.js') }}"></script>

    <!-- GSAP -->
    <script src="{{ asset('assets1/vendor/gsap/src/minified/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js') }}"></script>

    <!-- Popper -->
    <script src="{{ asset('assets1/vendor/popper.js/dist/umd/popper.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets1/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Sticky Kit -->
    <script src="{{ asset('assets1/vendor/sticky-kit/dist/sticky-kit.min.js') }}"></script>

    <!-- Jarallax -->
    <script src="{{ asset('assets1/vendor/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/jarallax/dist/jarallax-video.min.js') }}"></script>

    <!-- imagesLoaded -->
    <script src="{{ asset('assets1/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>

    <!-- Flickity -->
    <script src="{{ asset('assets1/vendor/flickity/dist/flickity.pkgd.min.js') }}"></script>

    <!-- Isotope -->
    <script src="{{ asset('assets1/vendor/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>

    <!-- Photoswipe -->
    <script src="{{ asset('assets1/vendor/photoswipe/dist/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/photoswipe/dist/photoswipe-ui-default.min.js') }}"></script>

    <!-- Typed.js -->
    <script src="{{ asset('assets1/vendor/typed.js/lib/typed.min.js') }}"></script>

    <!-- Jquery Validation -->
    <script src="{{ asset('assets1/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>

    <!-- Jquery Countdown + Moment -->
    <script src="{{ asset('assets1/vendor/jquery-countdown/dist/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/moment-timezone/builds/moment-timezone-with-data.min.js') }}"></script>

    <!-- Hammer.js -->
    <script src="{{ asset('assets1/vendor/hammerjs/hammer.min.js') }}"></script>

    <!-- NanoSroller -->
    <script src="{{ asset('assets1/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js') }}"></script>

    <!-- SoundManager2 -->
    <script src="{{ asset('assets1/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js') }}"></script>

    <!-- DateTimePicker -->
    <script src="{{ asset('assets1/vendor/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>

    <!-- Revolution Slider -->
    <script src="{{ asset('assets1/vendor/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>

    <!-- Keymaster -->
    <script src="{{ asset('assets1/vendor/keymaster/keymaster.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('assets1/vendor/summernote/dist/summernote-bs4.min.js') }}"></script>

    <!-- GODLIKE -->
    <script src="{{ asset('assets1/js/godlike.min.js') }}"></script>
    <script src="{{ asset('assets1/js/godlike-init.js') }}"></script>
    <!-- END: Scripts -->

</body>

</html>
