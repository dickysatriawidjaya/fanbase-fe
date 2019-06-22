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
                           
                        </div>
                    </div>
                </div>
                <div class="section sections_style_0 ">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One full width row-->
                            <div class="column one column_column">
                                <div class="column_attr align_center">
                                    <h2>Music</h2>
                                </div>
                            </div>
                            <!-- One full width row-->
                            <div class="column one column_column">
                                <div class="column_attr ">
                                    <!-- Image Gallery-->
                                    <div id='gallery-1' class='gallery galleryid-2301 gallery-columns-3 gallery-size-thumbnail '>
                                        <!-- Gallery item -->
                                        @foreach($data->foto as $c)
                                          <a class="hover" href='/musicdetail/{{$c->id}}?title={{$c->title}}'>
                                            <dl class='gallery-item'>
                                                <dt class='gallery-icon landscape'>
                                                <img width="300" height="300" src="{{ env('API_PREFIX').$c->physical_path }}" class="attachment-thumbnail" alt="home_animals_photo14" />
                                                <h4>{{$c->title}}</h4>
                                                <p>{{ date("d M Y", strtotime($c->created_at))}}</p>
                                                </dt>
                                                <dd></dd>
                                            </dl>
                                          </a>
                                        @endforeach
                                        <br class="flv_clear_both" />
                                    </div>
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
