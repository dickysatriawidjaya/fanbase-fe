<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>{{$data->web_title}}</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('asset3/images/favicon.ico') }}">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Raleway:100,300,400,400italic,500,700,800,900'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Alegreya:100,300,400,400italic,500,700,800,900'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS -->
    <link rel='stylesheet' href='{{ asset('asset3/css/global.css') }}'>
    <link rel='stylesheet' href='{{ asset('asset3/css/structure.css') }}'>
    <link rel='stylesheet' href='{{ asset('asset3/css/animals.css') }}'>
    <link rel='stylesheet' href='{{ asset('asset3/css/custom.css') }}'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{ asset('asset3/css/settings.css') }}">

</head>

<body data-font="{{$data->web_font}}" class="home page template-slider layout-full-width no-content-padding header-stack header-center sticky-dark subheader-both-center">
	<!-- Main Theme Wrapper -->
	<div id="Wrapper">
    <!-- Header Wrapper -->
    <div id="Header_wrapper" class="bg-parallax" data-stellar-background-ratio="0.5">
      <!-- Header -->
      <header id="Header">

	      <!-- Header -  Logo and Menu area -->
	      <div id="Top_bar">
          <div class="container">
            <div class="column one">
              <div class="top_bar_left clearfix">
                <!-- Logo-->
                <div class="logo">
                  <h1><a id="logo" href="/" title="Noah"><img class="logo-main scale-with-grid" src="{{ env('API_PREFIX').$data->web_logo }}"  alt="Fanbase" /> </a></h1>
                </div>
                <!-- Main menu-->
                <div class="menu_wrapper">
                  <nav id="menu">
                    <ul id="menu-main-menu" class="menu">
                      <li class="current_page_item">
                          <a href="/"><span>HOME</span></a>
                      </li>
                      @foreach($data->menu as $menu)
                        <li>
                          <a href="/{{strtolower($menu->category->category_name)}}"><span>{{ $menu->category->category_name }}</span></a>
                      </li>
                    @endforeach
                      
						<li i>
                          <a href="/music"><span>MUSIC</span></a>
                      </li>
											<li i>
                          <a href="/movie"><span>MOVIE</span></a>
                      </li>
                      <li i>
                          <a href="/profile"><span>PROFILE</span></a>
                      </li>
											<!-- <li i>
                          <a href="/template3/stor"><span>STORE</span></a>
                      </li>
											<li i>
                          <a href="/template3/lovers"><span>LOVERS</span></a>
                      </li>
											<li i>
                          <a href="/template3/link"><span>LINK</span></a>
                      </li> -->
                    </ul>
                  </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                </div>
                <!-- Header Searchform area-->
                <div class="search_wrapper">
                  <form method="get" action="#">
                      <i class="icon_search icon-search"></i><a href="#" class="icon_close"><i class="icon-cancel"></i></a>
                      <input type="text" class="field" name="s" placeholder="Enter your search" />
                      <input type="submit" class="submit flv_disp_none" value="" />
                  </form>
                </div>
              </div>
            </div>
          </div>
	      </div>
	      <!-- Revolution slider area-->
	      <div class="mfn-main-slider" id="mfn-rev-slider">
	          <div id="rev_slider_1_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container sections_style_1">
	              <div id="rev_slider_1_2" class="rev_slider fullwidthabanner" data-version="5.0.4.1">
	                  <ul>
	                      <li data-index="rs-1" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('asset3/images/img/slider1.jpeg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
	                          <img src="{{ asset('asset3/images/img/slider1.jpeg') }}" alt="" width="1880" height="880" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
	                      </li>
	                      <li data-index="rs-2" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('asset3/images/img/slider2.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
	                          <img src="{{ asset('asset3/images/img/slider2.jpg') }}" alt="" width="1880" height="880" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
	                      </li>
	                  </ul>
	                  <div class="tp-bannertimer tp-bottom flv_viz_hid"></div>
	              </div>
	          </div>
	      </div>
      </header>
    </div>
    <!-- Main Content -->
        @yield('content')
        <!-- Footer-->
        <footer id="Footer" class="clearfix">
              <!-- Footer copyright-->
              <div class="footer_copy">
                  <div class="container">
                      <div class="column one">
                          <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
                          <div class="copyright">
                          {!!$data->web_footer!!}
                          </div>
                      </div>
                  </div>
              </div>
          </footer>
      </div>

        <!-- JS -->
        <script src="{{ asset('asset3/js/jquery-2.1.4.min.js') }}"></script>

        <script src="{{ asset('asset3/js/mfn.menu.js') }}"></script>
        <script src="{{ asset('asset3/js/jquery.plugins.js') }}"></script>
        <script src="{{ asset('asset3/js/jquery.jplayer.min.js') }}"></script>
        <script src="{{ asset('asset3/js/animations/animations.js') }}"></script>
        <script src="{{ asset('asset3/js/scripts.js') }}"></script>

        <script src="{{ asset('asset3/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('asset3/js/jquery.themepunch.revolution.min.js') }}"></script>

        <script src="{{ asset('asset3/js/revolution.extension.video.min.js') }}"></script>
        <script src="{{ asset('asset3/js/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('asset3/js/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('asset3/js/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('asset3/js/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('asset3/js/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('asset3/js/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('asset3/js/revolution.extension.parallax.min.js') }}"></script>

        <script>
            var tpj = jQuery;
            tpj.noConflict();
            var revapi1;
            tpj(document).ready(function() {
                if (tpj("#rev_slider_1_2").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_1_2");
                } else {
                    revapi1 = tpj("#rev_slider_1_2").show().revolution({
                        sliderType: "standard",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "on",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "gyges",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: false,
                                tmp: '',
                                left: {
                                    h_align: "left",
                                    v_align: "bottom",
                                    h_offset: 20,
                                    v_offset: 20
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "bottom",
                                    h_offset: 20,
                                    v_offset: 20
                                }
                            }
                        },
                        gridwidth: 1176,
                        gridheight: 880,
                        lazyType: "none",
                        shadow: 0,
                        spinner: "spinner3",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        startWithSlide: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: "off",
                        }
                    });
                }
            });
            /*]]>*/
        </script>

        <script>
        	document.addEventListener('contextmenu', event => event.preventDefault());

            jQuery(window).load(function() {
                var retina = window.devicePixelRatio > 1 ? true : false;
                if (retina) {
                    var retinaEl = jQuery("#logo img.logo-main");
                    var retinaLogoW = retinaEl.width();
                    var retinaLogoH = retinaEl.height();
                    retinaEl.attr("src", "{{ asset('asset3/images/img/logo.png') }}").width(retinaLogoW).height(retinaLogoH);
                    var stickyEl = jQuery("#logo img.logo-sticky");
                    var stickyLogoW = stickyEl.width();
                    var stickyLogoH = stickyEl.height();
                    stickyEl.attr("src", "{{ asset('asset3/images/img/logo.png') }}").width(stickyLogoW).height(stickyLogoH);
                }

            });
                if(jQuery("body").attr("data-font")){
                    let font = jQuery("body").attr("data-font")
                   console.log(font)
                   jQuery('body').css("font-family", font);
                }
        </script>

    </body>

    </html>
