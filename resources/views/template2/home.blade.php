@extends('template2/menu/menu')
@section('content')
  <div class="head">
    <div class="hero">
      <img class="hero_image" src="{{ env('API_PREFIX').$data->web_main_banner }}"/>
    </div>
  </div>
  <div class="content">
    <div class="box">
      <a href="/live"><img class="hero_image" src="{{ asset('assets2/images/bp/1.jpg') }}"></a>
    </div>
    <div class="box">
      <a href="/media"><img class="hero_image" src="{{ asset('assets2/images/bp/2.jpg') }}"/></a>
    </div>
    <div class="box">
      <a href="/store"><img class="hero_image" src="{{ asset('assets2/images/bp/3.jpg') }}"/></a>
    </div>
    <div class="box">
      <a href="/lovers"><img class="hero_image" src="{{ asset('assets2/images/bp/4.jpg') }}"/></a>
    </div>
  </div>
@endsection
