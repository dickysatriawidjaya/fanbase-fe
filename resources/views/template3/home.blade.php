@extends('template3/menu/menu')
@section('content')

    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section sections_style_0 ">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One full width row-->
                                <div class="column one column_column">
                                    <div class="column_attr align_center">
                                        <div style="display: inline-block;margin: 0 auto; position: relative; margin-top: -50px; z-index: 20;">
                                            <div class="image_frame no_link scale-with-grid alignnone no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="{{ asset('asset3/images/home_animals_frame.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section" style="padding-top:0px; padding-bottom:50px; ">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One full width row-->
                                <div class="column one column_column">
                                    <div class="column_attr align_center">
                                        <h2>{{$data->web_title}}</h2>
                                    </div>
                                </div>
                                <!-- One full width row-->
                                <div class="column one column_blog_slider">
                                    <div class="blog_slider clearfix ">
                                        <div class="blog_slider_header">
                                            <a class="button button_js slider_prev" href="#"><span class="button_icon"><i class="icon-left-open-big"></i></span></a><a class="button button_js slider_next" href="#"><span class="button_icon"><i class="icon-right-open-big"></i></span></a>
                                        </div>
                                        <ul class="blog_slider_ul">
                                            <li class="post-2275 post  format-standard has-post-thumbnail   tag-grid ">
                                                <div class="item_wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="/news"><img width="576" height="450" src="{{ asset('asset3/images/img/2.jpg') }}" class="scale-with-grid wp-post-image" alt="home_animals_photo3" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="date_label">
                                                        May 9, 2014
                                                    </div> -->
                                                    <div class="desc">
                                                        <h4><a href="/news">News</a></h4>
                                                        <hr class="hr_color" />
                                                        <!-- <a href="content/animals/article-4.html" class="button button_left button_js"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">Read more</span></a> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-2277 post  format-standard has-post-thumbnail  tag-video">
                                                <div class="item_wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="/music"><img width="576" height="450" src="{{ asset('asset3/images/img/2.jpg') }}" class="scale-with-grid wp-post-image" alt="home_animals_photo17" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="date_label">
                                                        May 8, 2014
                                                    </div> -->
                                                    <div class="desc">
                                                        <h4><a href="content/animals/article-5.html">Gallery</a></h4>
                                                        <hr class="hr_color" />
                                                        <!-- <a href="content/animals/article-5.html" class="button button_left button_js"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">Read more</span></a> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="post-2279 post  format-standard has-post-thumbnail  tag-motion tag-video">
                                                <div class="item_wrapper">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="/live"><img width="576" height="450" src="{{ asset('asset3/images/img/2.jpg') }}" class="scale-with-grid wp-post-image" alt="home_animals_photo5" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="date_label">
                                                        May 7, 2014
                                                    </div> -->
                                                    <div class="desc">
                                                        <h4><a href="/live">LIVE</a></h4>
                                                        <hr class="hr_color" />
                                                        <!-- <a href="content/animals/article-6.html" class="button button_left button_js"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">Read more</span></a> -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="slider_pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section" style="padding-top:50px; padding-bottom:0px; ">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One full width row-->
                                <!-- <div class="column one column_column">
                                    <div class="column_attr align_center">
                                        <h2 style="font-weight: 400;">We <img style="position: relative; top: 4px;" src="{{ asset('asset3/images/home_animals_heart.png') }}" alt=""> Noah</h2>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
