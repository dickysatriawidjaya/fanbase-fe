@extends('template2/menu/menu')
@section('content')
  <div class="content">
    <div class="titlebox">
      <div class="title">
        <h3>MUSIC</h3>
      </div>
    </div>
    <!-- MUSIC LISTS -->
    @foreach($data->foto as $c)
    <div class="music_box">
      <img class="hero_image" src="{{ env('API_PREFIX').$c->physical_path }}"/>
      <div class="category">
        <p>Music</p>
      </div>
      <a class="music_title"  href="/musicdetail/{{$c->id}}?title={{$c->title}}">{{$c->title}}</a>
    </div>
    @endforeach
  </div>
@endsection
