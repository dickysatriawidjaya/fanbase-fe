@extends('home1/template/template')
 @section('content')

    <div class="nk-main">
    <div class="container">
        <div class="nk-gap-4"></div>

        <!-- START: Posts List -->
        <div class="nk-blog-list">


                <!-- START: Post -->
                <div class="nk-blog-post" data-mouse-parallax-z="5" data-mouse-parallax-speed="1">
                    <div class="nk-post-thumb">

                            <div class="nk-post-type"><span class="ion-image"></span></div>

                        <div class="nk-post-category">
                            <a href="#">News</a>
                        </div>
                        <a href="/news">
                            <img src="{{ asset('assets1/images/post-1-mid.jpg') }}" alt="" class="nk-img-stretch">
                        </a>
                    </div>
                    <div class="nk-post-content">
                        <div data-mouse-parallax-z="2">
                            <h2 class="nk-post-title h1">
                                <a href="/news">Game Of Thron</a>
                            </h2>
                            <div class="nk-post-date">
                                January 18, 2019
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->

                <!-- START: Post -->
                <div class="nk-blog-post" data-mouse-parallax-z="5" data-mouse-parallax-speed="1">
                    <div class="nk-post-thumb">

                            <div class="nk-post-type"><span class="ion-videocamera"></span></div>

                        <div class="nk-post-category">
                            <a href="#">Release</a>
                        </div>
                        <a href="/news">
                            <img src="{{ asset('assets1/images/post-2-mid.jpg') }}" alt="" class="nk-img-stretch">
                        </a>
                    </div>
                    <div class="nk-post-content">
                        <div data-mouse-parallax-z="2">
                            <h2 class="nk-post-title h1">
                                <a href="/news">Recore</a>
                            </h2>
                            <div class="nk-post-date">
                                September 5, 2018
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->

                <!-- START: Post -->
                <div class="nk-blog-post" data-mouse-parallax-z="5" data-mouse-parallax-speed="1">
                    <div class="nk-post-thumb">

                            <div class="nk-post-type"><span class="ion-quote"></span></div>

                        <div class="nk-post-category">
                            <a href="#">Beta Test</a>
                        </div>
                        <a href="/news">
                            <img src="{{ asset('assets1/images/post-3-mid.jpg') }}" alt="" class="nk-img-stretch">
                        </a>
                    </div>
                    <div class="nk-post-content">
                        <div data-mouse-parallax-z="2">
                            <h2 class="nk-post-title h1">
                                <a href="/news">Point Blank New</a>
                            </h2>
                            <div class="nk-post-date">
                                August 27, 2018
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->

                <!-- START: Post -->
                <div class="nk-blog-post" data-mouse-parallax-z="5" data-mouse-parallax-speed="1">
                    <div class="nk-post-thumb">

                            <div class="nk-post-type"><span class="ion-music-note"></span></div>

                        <div class="nk-post-category">
                            <a href="#">Release</a>
                        </div>
                        <a href="/news">
                            <img src="{{ asset('assets1/images/post-4-mid.jpg') }}" alt="" class="nk-img-stretch">
                        </a>
                    </div>
                    <div class="nk-post-content">
                        <div data-mouse-parallax-z="2">
                            <h2 class="nk-post-title h1">
                                <a href="/news">Asasin krit</a>
                            </h2>
                            <div class="nk-post-date">
                                August 14, 2018
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->

                <!-- START: Post -->
                <div class="nk-blog-post" data-mouse-parallax-z="5" data-mouse-parallax-speed="1">
                    <div class="nk-post-thumb">

                            <div class="nk-post-type"><span class="ion-images"></span></div>

                        <div class="nk-post-category">
                            <a href="#">News</a>
                        </div>
                        <a href="/news">
                            <img src="{{ asset('assets1/images/post-5-mid.jpg') }}" alt="" class="nk-img-stretch">
                        </a>
                    </div>
                    <div class="nk-post-content">
                        <div data-mouse-parallax-z="2">
                            <h2 class="nk-post-title h1">
                                <a href="/news">God Of War</a>
                            </h2>
                            <div class="nk-post-date">
                                Jule 23, 2018
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->


            <!-- START: Pagination -->
            <div class="nk-pagination nk-pagination-center">
                <a href="#" class="nk-btn nk-btn-lg nk-btn-circle">Load More ...</a>
            </div>
            <!-- END: Pagination -->
        </div>
        <!-- END: Posts List -->

        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>

    </div>
@endsection
