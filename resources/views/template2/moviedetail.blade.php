@extends('template2/menu/menu')
@section('content')
<div class="head">
  <div class="hero">
    <iframe src="{{$data->video->url}}" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
  </div>
</div>
<div class="content">
  <div class="titlebox">
    <div class="title">
    <!-- //SOCIAL MEDIA -->
        <div >
        <a href="https://twitter.com/intent/tweet?url={{url()->current()}}" target="_blank"><i class="fa fa-twitter">twitter</i></a>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"  target="_blank"><i class="fa fa-facebook">facebook</i></a>
        </div>
    <!-- //SOCIAL MEDIA -->
    </div>
  </div>
  <div class="profile_box">
    <!-- <h4>Detail Page</h4> -->
    <div class="list_box">
      <div class="category">
        <p>Detail</p>
      </div>
      <div class="list_title">
        <a class="news_title" href="#">{{$data->video->title}}</a>
      </div>
      <div class="list_date">
        <p>{{ date("d M Y", strtotime($data->video->created_at)) }}</p>
      </div>
    </div>
    <p>{{$data->video->description}}</p>
    
  </div>
</div>
@endsection
