@extends('template3/menu/menu')
@section('content')
<div id="Subheader">
    <div class="container">
        <div class="column one">
            <h1 class="title">PROFILE</h1>
        </div>
    </div>
</div>
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div id="post-2275" class="post-2275 post  format-standard has-post-thumbnail   tag-grid ">
                
                <!-- Post Content-->
                <div class="post-wrapper-content">
                    <div class="entry-content">
                        <div class="section the_content has_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper">
                                  {!!$data->web_profile!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sosmed">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"  target="_blank"><i class="fa fa-facebook" aria-hidden="true"> </i></a>
                    
                    <a href="https://twitter.com/intent/tweet?url={{url()->current()}}" target="_blank"><i class="fa fa fa-twitter" aria-hidden="true"></i></a>
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
