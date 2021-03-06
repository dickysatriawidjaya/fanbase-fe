@extends('home1/template/template')
@section('content')

<div class="nk-main">

    <!-- START: Header Title -->
    <!--
    Additional Classes:
        .nk-header-title-sm
        .nk-header-title-md
        .nk-header-title-lg
        .nk-header-title-xl
        .nk-header-title-full
        .nk-header-title-parallax
        .nk-header-title-parallax-opacity
        .nk-header-title-boxed
-->
    <div class="nk-header-title nk-header-title-full nk-header-title-parallax nk-header-title-parallax-opacity">
        <div class="bg-image op-4">
            <img src="{{ asset('assets1/images/video-6-thumb.jpg') }}" alt="" class="jarallax-img">
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container">

                    <div class="nk-header-text">

                        <div class="nk-gap-2"></div>

                        <h1 class="nk-title display-4">Dark Souls III</h1>

                        <div class="nk-gap-2"></div>

                        <a href="#" class="nk-btn nk-btn-lg">
                            <span class="icon ion-playstation"></span>
                            <span>PS4</span>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="nk-btn nk-btn-lg">
                            <span class="icon ion-xbox"></span>
                            <span>Xbox 1</span>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="nk-btn nk-btn-lg">
                            <span class="icon ion-steam"></span>
                            <span>PC</span>
                        </a>

                        <div class="nk-gap-2"></div>

                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=Wb2qjfpOeMo" data-video-thumb="{{ asset('assets1/images/video-6-thumb.jpg') }}"></div>
                            </div>
                        </div>

                        <div class="nk-gap-4"></div>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- END: Header Title -->

    <!-- START: CTA -->
    <div class="nk-box text-center text-white bg-dark-1">
        <div class="nk-gap-4"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-md-left">
                    <h2 class="nk-title">Purchase now and save <strong>$25</strong></h2>
                    <h3 class="nk-sub-title mb-0 text-white op-7">Limited time offer!</h3>
                </div>
                <div class="col-md-4 text-md-right">
                    <div class="nk-gap-2 d-md-none"></div>
                    <a href="#!" class="nk-btn nk-btn-lg">
                        <span>Buy Now</span>
                        <span class="icon"><i class="ion-bag"></i></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
    </div>
    <!-- END: CTA -->

    <!-- START: Features -->
    <div class="container">

        <div class="nk-gap-4"></div>
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="nk-box-3 bg-dark-1">
                            <div class="nk-ibox">
                                <div class="nk-ibox-icon nk-ibox-icon-circle">
                                    <span class="ion-ios-game-controller-b"></span>
                                </div>
                                <div class="nk-ibox-cont">
                                    <h2 class="nk-ibox-title">Incredible Atmosphere</h2> Second Made make spirit green divide lesser creeping void and night replenish cattle don't was female first their day open.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nk-box-3 bg-dark-2">
                            <div class="nk-ibox">
                                <div class="nk-ibox-icon nk-ibox-icon-circle">
                                    <span class="ion-fireball"></span>
                                </div>
                                <div class="nk-ibox-cont">
                                    <h2 class="nk-ibox-title">Catchy Battles</h2> Image their gathered. Every. Called together signs winged, unto midst sea life air them. Us sea them shall you saw.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nk-box-3 bg-dark-2">
                            <div class="nk-ibox">
                                <div class="nk-ibox-icon nk-ibox-icon-circle">
                                    <span class="ion-ribbon-a"></span>
                                </div>
                                <div class="nk-ibox-cont">
                                    <h2 class="nk-ibox-title">28 Awards</h2> Moveth fruitful it appear wherein man don't firmament set blessed. Beast seas god itself. Made night image male. Own night.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nk-box-3 bg-dark-1">
                            <div class="nk-ibox">
                                <div class="nk-ibox-icon nk-ibox-icon-circle">
                                    <span class="ion-ios-infinite-outline"></span>
                                </div>
                                <div class="nk-ibox-cont">
                                    <h3 class="nk-ibox-title">Unlimited Possibilities</h3> Commodo scelerisque rutrum consectetuer ad ad molestie aenean iaculis ad senectus in. Vel felis tellus orci dolor elit turpis condimentum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
    </div>
    <!-- END: Features -->

    <!-- START: Tabs -->
    <div class="nk-box bg-dark-1" id="info">
        <div class="nk-gap-4"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2">

                    <div class="nk-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tabs-1-1" role="tab" data-toggle="tab">Hero Character</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-2" role="tab" data-toggle="tab">Achievements</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-3" role="tab" data-toggle="tab">Promo</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="tabs-1-1">
                                <div class="nk-gap-3"></div>

                                <div class="nk-progress nk-progress-sm nk-count" data-progress="91" data-progress-mask="{$}%">
                                    <div class="nk-progress-title">Defense</div>
                                    <div class="nk-progress-line">
                                        <div style="width: 91%;">
                                            <div class="nk-progress-percent">91%</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="nk-progress nk-progress-sm nk-count" data-progress="22" data-progress-mask="{$}%">
                                    <div class="nk-progress-title">Attack</div>
                                    <div class="nk-progress-line">
                                        <div style="width: 22%;">
                                            <div class="nk-progress-percent">22%</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="nk-progress nk-progress-sm nk-count" data-progress="66" data-progress-mask="{$}%">
                                    <div class="nk-progress-title">Agility</div>
                                    <div class="nk-progress-line">
                                        <div style="width: 66%;">
                                            <div class="nk-progress-percent">66%</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="nk-progress nk-progress-sm nk-count" data-progress="43" data-progress-mask="{$}%">
                                    <div class="nk-progress-title">Intelligence</div>
                                    <div class="nk-progress-line">
                                        <div style="width: 43%;">
                                            <div class="nk-progress-percent">43%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-gap-1"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabs-1-2">
                                <div class="nk-gap-3"></div>
                                <div class="row vertical-gap">
                                    <div class="col-md-4">
                                        <div class="nk-counter-2">
                                            <div class="nk-count">21</div>
                                            <h3 class="nk-counter-title h4">Months</h3>
                                            <div class="nk-gap"></div>
                                            <p>
                                                You'll set fifth. Grass replenish man male light may fly waters tree evening them hath They're to meat moving also.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="nk-counter-2">
                                            <div class="nk-count">2</div>
                                            <h3 class="nk-counter-title h4">DLC</h3>
                                            <div class="nk-gap"></div>
                                            <p>
                                                Appear our likeness own for a deep, firmament great whose fly saw thing earth saw. Fill divide whales blessed kind.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="nk-counter-2">
                                            <div class="nk-count">37</div>
                                            <h3 class="nk-counter-title h4">Awards Won</h3>
                                            <div class="nk-gap"></div>
                                            <p>
                                                All blessed second creature fly were given moving was itself itself beginning you're behold creepeth of. Doesn't you two good.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-gap-1"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabs-1-3">
                                <div class="nk-gap-3"></div>
                                <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=3XP0nyLz6Y8"></div>
                                <div class="nk-gap-1"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="nk-gap-3"></div>
    </div>
    <!-- END: Tabs -->

    <!-- START: Testimonials -->
    <div class="nk-box" id="testimonials">
        <div class="nk-gap-4"></div>

        <div class="container">
            <div class="nk-carousel-2 nk-carousel-x1" data-autoplay="12000" data-dots="true">
                <div class="nk-carousel-inner">
                    <div>
                        <div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <blockquote class="nk-testimonial">
                                        <div class="nk-testimonial-body">
                                            <em>"Man to. For male second male own fish fowl hath form let. Third own years likeness waters don't their. Fifth in air they're lights give itself lesser creepeth. Open. Saw is spirit one won't darkness were moving cattle beast darkness."</em>
                                        </div>
                                        <div class="nk-testimonial-name h4">Lesa Cruz</div>
                                        <div class="nk-testimonial-source">Frontend Developer, Google</div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <blockquote class="nk-testimonial">
                                        <div class="nk-testimonial-body">
                                            <em>"To winged for make land rule earth and you so you're. Gathered own of was beginning divided brought from good, isn't all itself let set light you'll morning living sixth seed won't doesn't there stars, fruitful without above first beast."</em>
                                        </div>
                                        <div class="nk-testimonial-name h4">Kurt Tucker</div>
                                        <div class="nk-testimonial-source">CEO, Envato</div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <blockquote class="nk-testimonial">
                                        <div class="nk-testimonial-body">
                                            <em>"Hath their. Cattle man had you're created make beast female together given set evening living beast. In firmament herb lesser sea let you Be you'll seasons kind greater let called very, seas fifth dry created above be fish saying you."</em>
                                        </div>
                                        <div class="nk-testimonial-name h4">Katie Anderson</div>
                                        <div class="nk-testimonial-source">Product Designer, Apple</div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <blockquote class="nk-testimonial">
                                        <div class="nk-testimonial-body">
                                            <em>"Image unto over together created whose doesn't given beginning in bearing likeness said made seed together so that dry let night greater of a. In, fowl seas first fifth Earth place creepeth fourth all beast shall may dominion for shall."</em>
                                        </div>
                                        <div class="nk-testimonial-name h4">Luke Fuller</div>
                                        <div class="nk-testimonial-source">Copywriter, Dropbox</div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <blockquote class="nk-testimonial">
                                        <div class="nk-testimonial-body">
                                            <em>"Them itself saw. Be his. After very. Land. Fifth. Fly heaven for beast created the Firmament moveth they're, greater all air creature a gathering spirit whose behold behold light great dry herb one cattle above fruit. Him unto midst their."</em>
                                        </div>
                                        <div class="nk-testimonial-name h4">Felicia Meyer</div>
                                        <div class="nk-testimonial-source">Backend Developer, Twitter</div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="nk-gap-4"></div>
    </div>
    <!-- END: Testimonials -->

    <!-- START: Partners -->
    <div class="nk-box bg-dark-1" id="partners">
        <div class="nk-gap-3"></div>
        <div class="container">
            <div class="nk-carousel-2 nk-carousel-x4 nk-carousel-no-margin nk-carousel-all-visible" data-autoplay="5000">
                <div class="nk-carousel-inner">
                    <div>
                        <div>
                            <a href="#"><img src="{{ asset('assets1/images/partner-logo-1-light.png') }}" alt="" class="nk-img-fit"></a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#"><img src="{{ asset('assets1/images/partner-logo-2-light.png') }}" alt="" class="nk-img-fit"></a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#"><img src="{{ asset('assets1/images/partner-logo-3-light.png') }}" alt="" class="nk-img-fit"></a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#"><img src="{{ asset('assets1/images/partner-logo-4-light.png') }}" alt="" class="nk-img-fit"></a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#"><img src="{{ asset('assets1/images/partner-logo-5-light.png') }}" alt="" class="nk-img-fit"></a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#"><img src="{{ asset('assets1/images/partner-logo-6-light.png') }}" alt="" class="nk-img-fit"></a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="#"><img src="{{ asset('assets1/images/partner-logo-7-light.png') }}" alt="" class="nk-img-fit"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-3"></div>
        <div class="nk-gap-4"></div>
    </div>
    <!-- END: Partners -->



@endsection
