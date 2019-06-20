@extends('template2/menu/menu')
@section('content')
  <div class="head">
    <div class="hero">
      <img class="hero_image" src="{{ asset('assets2/images/bpheader.jpg') }}"/>
    </div>
  </div>
  <div class="content">
    <div class="box">
      <a href="/template2/live"><img class="hero_image" src="{{ asset('assets2/images/bp/1.jpg') }}"></a>
      <!-- <div class="box_title">
        <p>LIVE</p>
      </div> -->
    </div>
    <div class="box">
      <a href="/template2/media"><img class="hero_image" src="{{ asset('assets2/images/bp/2.jpg') }}"/></a>
      <!-- <div class="box_title">
        <p>MEDIA</p>
      </div> -->
    </div>
    <div class="box">
      <a href="/template2/store"><img class="hero_image" src="{{ asset('assets2/images/bp/3.jpg') }}"/></a>
      <!-- <div class="box_title">
        <p>STORE</p>
      </div> -->
    </div>
    <div class="box">
      <a href="/template2/lovers"><img class="hero_image" src="{{ asset('assets2/images/bp/4.jpg') }}"/></a>
      <!-- <div class="box_title">
        <p>LOVERS</p>
      </div> -->
    </div>
  </div>
@endsection
