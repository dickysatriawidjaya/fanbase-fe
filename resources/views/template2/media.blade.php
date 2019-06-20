@extends('template2/menu/menu')
@section('content')
  <div class="head">
    <div class="hero">
      <img class="hero_image" src="{{ asset('assets2/images/bp/news.jpg') }}"/>
    </div>
  </div>
  <div class="content">
    <div class="titlebox">
      <div class="title">
        <h3>MEDIA</h3>
      </div>
    </div>
    <!-- MEDIA LISTS -->
    <div class="list_box">
      <div class="category">
        <p>Radio</p>
      </div>
      <div class="list_title">
        <a class="news_title" href="#">FM OH!「Double-E」</a>
      </div>
      <div class="list_date">
        <p>31, Mar. 2019</p>
      </div>
    </div>
    <!-- END MEDIA LISTS -->
    <!-- MEDIA LISTS -->
    <div class="list_box">
      <div class="category">
        <p>Radio</p>
      </div>
      <div class="list_title">
        <a class="news_title" href="#">Fm yokohama「Sunset Breeze」</a>
      </div>
      <div class="list_date">
        <p>31, June. 2019</p>
      </div>
    </div>
    <!-- END MEDIA LISTS -->
  </div>
@endsection
