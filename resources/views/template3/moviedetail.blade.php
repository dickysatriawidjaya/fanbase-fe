@extends('template3/menu/menu')
@section('content')

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div id="post-2275" class="post-2275 post  format-standard has-post-thumbnail   tag-grid ">
                <div class="section section-post-header">
                    <div class="section_wrapper clearfix">
                        <!-- Posts Navigation -->
                        <!-- Post Header-->
                        <!-- One full width row-->
                        <div class="column one post-header">
                            
                            <div class="title_wrapper">
                                <h1 class="entry-title">{{$data->video->title}}</h1>
                                <div class="post-meta clearfix">
                                    <div class="author-date">
                                        <span class="vcard author post-author">
                                           
                                            </span><span class="date">  
                                            <i class="icon-clock"></i>
                                            <time class="entry-date" datetime="2014-05-09T09:28:12+00:00" >
                                            {{ date("d M Y", strtotime($data->video->created_at)) }}
                                            </time> 
                                        </span>
                                    </div>
                                    
                                  
                                </div>
                            </div>
                        </div>
                        <!-- Post Featured Element (image / video / gallery)-->
                        <!-- One full width row-->
                        <div class="column one single-photo-wrapper">

                            <div class="image_frame scale-with-grid ">
                                <div class="image_wrapper">
                                <iframe width="560" height="315" src="{{$data->video->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post Content-->
                <div class="post-wrapper-content">
                    <div class="entry-content">
                        <div class="section the_content has_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper">
                                {{$data->video->description}}
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <!--Author Info Area-->
                   
                </div>
                <!-- Related posts area-->
              
                <!-- Comments area-->
                
            </div>
        </div>
    </div>
</div>

@endsection
