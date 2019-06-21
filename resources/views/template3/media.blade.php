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
                <div class="section" style="padding-top:10px; padding-bottom:10px; ">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One full width row-->
                            <div class="column one column_column">
                                <div class="column_attr align_center">
                                    <h4 style="margin: 0 10%;">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ip sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque Suspendisse in orci enim.</h4>
                                    <hr class="no_line" style="margin: 0 auto 35px;" />
                                    <div class="image_frame no_link scale-with-grid no_border">
                                        <div class="image_wrapper"><img class="scale-with-grid" src="{{ asset('asset3/images/home_animals_line.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section sections_style_0 ">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One full width row-->
                            <div class="column one column_column">
                                <div class="column_attr align_center">
                                    <h2>MEDIA</h2>
                                </div>
                            </div>
                            <!-- One full width row-->
                            <div class="column one column_column">
                                <div class="column_attr ">
                                    <!-- Image Gallery-->
                                    <div id='gallery-1' class='gallery galleryid-2301 gallery-columns-3 gallery-size-thumbnail '>
                                        <!-- Gallery item -->
                                          <a class="hover" href='/template3/detail/detail1'>
                                            <dl class='gallery-item'>
                                                <dt class='gallery-icon landscape'>
                                                <img width="300" height="300" src="{{ asset('asset3/images/img/2.jpg') }}" class="attachment-thumbnail" alt="home_animals_photo14" />
                                                <h4> Fm yokohama「Sunset Breeze」</h4>
                                                <p>5, Jul. 2019 (Fri) </p>
                                                </dt>
                                                <dd></dd>
                                            </dl>
                                          </a>
                                          <!-- Gallery item -->
                                          <a class="hover" href='/template3/detail/detail1'>
                                            <dl class='gallery-item'>
                                                <dt class='gallery-icon landscape'>
                                                <img width="300" height="300" src="{{ asset('asset3/images/img/2.jpg') }}" class="attachment-thumbnail" alt="home_animals_photo14" />
                                                <h4> Fm yokohama「Sunset Breeze」</h4>
                                                <p>5, Jul. 2019 (Fri) </p>
                                                </dt>
                                                <dd></dd>
                                            </dl>
                                          </a>
                                          <!-- Gallery item -->
                                          <a class="hover" href='/template3/detail/detail1'>
                                            <dl class='gallery-item'>
                                                <dt class='gallery-icon landscape'>
                                                <img width="300" height="300" src="{{ asset('asset3/images/img/2.jpg') }}" class="attachment-thumbnail" alt="home_animals_photo14" />
                                                <h4> Fm yokohama「Sunset Breeze」</h4>
                                                <p>5, Jul. 2019 (Fri) </p>
                                                </dt>
                                                <dd></dd>
                                            </dl>
                                          </a>
                                          <!-- Gallery item -->
                                          <a class="hover" href='/template3/detail/detail1'>
                                            <dl class='gallery-item'>
                                                <dt class='gallery-icon landscape'>
                                                <img width="300" height="300" src="{{ asset('asset3/images/img/2.jpg') }}" class="attachment-thumbnail" alt="home_animals_photo14" />
                                                <h4> Fm yokohama「Sunset Breeze」</h4>
                                                <p>5, Jul. 2019 (Fri) </p>
                                                </dt>
                                                <dd></dd>
                                            </dl>
                                          </a>
                                          <!-- Gallery item -->
                                          <a class="hover" href='/template3/detail/detail1'>
                                            <dl class='gallery-item'>
                                                <dt class='gallery-icon landscape'>
                                                <img width="300" height="300" src="{{ asset('asset3/images/img/2.jpg') }}" class="attachment-thumbnail" alt="home_animals_photo14" />
                                                <h4>新木場STUDIO COAST</h4>
                                                <p>5, Jul. 2019 (Fri) </p>
                                                </dt>
                                                <dd></dd>
                                            </dl>
                                          </a>
                                        <br class="flv_clear_both" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section" style="padding-top:50px; padding-bottom:0px; ">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One full width row-->
                            <div class="column one column_column">
                                <div class="column_attr align_center">
                                    <h2 style="font-weight: 400;">We <img style="position: relative; top: 4px;" src="{{ asset('asset3/images/home_animals_heart.png') }}" alt=""> Noah</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section the_content no_content">
                    <div class="section_wrapper">
                        <div class="the_content_wrapper"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
