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
         
                <div class="section sections_style_0 ">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One full width row-->
                            <div class="column one column_column">
                                <div class="column_attr align_center">
                                    <h2>MOVIE</h2>
                                </div>
                            </div>
                            <!-- One full width row-->
                            <div class="column one column_column">
                                <div class="column_attr ">
                                @foreach($data->video as $c)
                                  <div class="box_movie">
                                    <iframe width="560" height="315" src="{{$c->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                      <h4><a href="/moviedetail/{{$c->id}}?title={{$c->title}}">{{$c->title}}</a></h4>
                                      <p>{{ date("d M Y", strtotime($c->created_at)) }}</p>
                                  </div>
                                @endforeach
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
