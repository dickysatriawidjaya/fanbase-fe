@extends('template3/menu/menu')
@section('content')
<div id="Subheader">
    <div class="container">
        <div class="column one">
            <h1 class="title">{{strtoupper($data->content[0]->category->category_name)}}</h1>
        </div>
    </div>
</div>
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
                                    <div style="display: inline-block;margin: 0 auto; position: relative; margin-top: -15px; z-index: 20;">
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
                            <div class="column one column_blog">
                                <div class="blog_wrapper isotope_wrapper clearfix">
                                    <div class="posts_group lm_wrapper classic">
                                    @foreach($data->content as $c)
                                        <div class="post-2275 post  format-standard has-post-thumbnail   tag-grid  post-item isotope-item clearfix">

                                            <div class="image_frame post-photo-wrapper scale-with-grid">
                                                <div class="image_wrapper">
                                                    <a href="/{{strtolower($c->category->category_name)}}/{{$c->id}}?title={{ $c->title }}">
                                                        <div class="mask"></div><img width="576" height="450" src="{{ asset('asset3/images/img/2.jpg') }}" class="scale-with-grid wp-post-image" alt="home_animals_photo3" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-desc-wrapper">
                                                <div class="post-desc">
                                                    <div class="post-meta clearfix">
                                                        <div class="author-date">
                                                            <span class="vcard author post-author">
                                                                <span class="label">{{$c->tag}}
                                                        {{ date("d M Y", strtotime($c->created_at)) }}</span>
                                                            </span>
                                                        </div>
                                                        <div class="category">
                                                            <span class="cat-btn">NEWS </span>
                                                        </div>
                                                    </div>
                                                    <div class="post-title">
                                                        <h2 class="entry-title"><a href="/{{strtolower($c->category->category_name)}}/{{$c->id}}?title={{ $c->title }}">{{ $c->title }}</a></h2>
                                                    </div>
                                                    <div class="post-excerpt">
                                                        <p class="big">
                                                        {{ str_limit($c->content,30,"...") }}
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                                    <!-- One full width row-->
                                    <!-- <div class="column one pager_wrapper pager_lm">
                                        <a class="r_load_more button button_js" href="#"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">Load more</span></a>
                                    </div> -->
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
    <!--  -->
</div>

@endsection
