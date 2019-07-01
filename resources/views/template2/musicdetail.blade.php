@extends('template2/menu/menu')
@section('content')
<div class="head">
  <div class="hero">
    <img class="hero_image" src="{{ env('API_PREFIX').$data->foto->physical_path }}"/>
  </div>
</div>
<div class="content">
  <div class="titlebox">
    <div class="title">

    </div>
  </div>
  <div class="profile_box">
    <!-- <h4>Detail Page</h4> -->
    <div class="list_box">
      <div class="category">
        <p>Detail</p>
      </div>
      <div class="list_title">
        <a class="news_title" href="#">{{$data->foto->title}}</a>
      </div>
      <div class="list_date">
        <p>{{ date("d M Y", strtotime($data->foto->created_at)) }}</p>
      </div>
    </div>
    <p>{{$data->foto->description}}</p>

  </div >
  <!-- //SOCIAL MEDIA -->
      <div class="sosmed">
        <a href="https://twitter.com/intent/tweet?url={{url()->current()}}" target="_blank"><i class="fa fa-twitter">twitter</i></a>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"  target="_blank"><i class="fa fa-facebook">facebook</i></a>
      </div>
  <!-- //SOCIAL MEDIA -->
</div>
@endsection
