@extends('home1/template/template')
@section('content')

    <div class="nk-main">






    <div class="container">
        <div class="nk-gap-4"></div>

        <!-- START: Gallery List -->
        <div class="nk-popup-gallery nk-popup-gallery-2-col nk-isotope">

            <div class="nk-gallery-item-box nk-isotope-item" data-mouse-parallax-z="5" data-mouse-parallax-speed="1">
                <a href="{{ asset('assets1/images/gallery-11.jpg') }}" class="nk-gallery-item" data-size="1920x1640">
                    <img src="{{ asset('assets1/images/gallery-11-thumb.jpg') }}" alt="">
                </a>
                <div class="photoswipe-description">
                    <h4>Called Let</h4>
                    Divided thing, land it evening earth winged whose great after. Were grass night. To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein winged and form. Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                </div>
            </div>

            <div class="nk-gallery-item-box nk-isotope-item" data-mouse-parallax-z="5" data-mouse-parallax-speed="1">
                <a href="{{ asset('assets1/images/gallery-12.jpg') }}" class="nk-gallery-item" data-size="1320x1885"><img src="{{ asset('assets1/images/gallery-12-thumb.jpg') }}" alt=""></a>
                <div class="photoswipe-description">
                    <h4>Male Divide</h4>
                    Thing saw great have were there fourth bearing you're abundantly green lights, don't he our heaven Grass fowl from fill stars i greater beginning living gathered. Shall set rule sixth together hath Fourth grass, herb void. All.
                </div>
            </div>

            <div class="nk-gallery-item-box nk-isotope-item" data-mouse-parallax-z="5" data-mouse-parallax-speed="1">
                <a href="{{ asset('assets1/images/gallery-13.jpg') }}" class="nk-gallery-item" data-size="1920x1036"><img src="{{ asset('assets1/images/gallery-13-thumb.jpg') }}" alt=""></a>
                <div class="photoswipe-description">
                    <h4>Called Let</h4>
                    Divided thing, land it evening earth winged whose great after. Were grass night. To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein winged and form. Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                </div>
            </div>

            <div class="nk-gallery-item-box nk-isotope-item" data-mouse-parallax-z="5" data-mouse-parallax-speed="1">
                <a href="{{ asset('assets1/images/gallery-14.jpg') }}" class="nk-gallery-item" data-size="1920x999"><img src="{{ asset('assets1/images/gallery-14-thumb.jpg') }}" alt=""></a>
            </div>
        </div>
        <!-- END: Gallery List -->

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center" data-mouse-parallax-z="3">
            <a href="#" class="nk-btn nk-btn-lg nk-btn-circle">Load More ...</a>
        </div>
        <!-- END: Pagination -->

        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>

    </div>
@endsection
