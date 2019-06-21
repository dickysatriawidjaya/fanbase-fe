@extends('template2/menu/menu')
@section('content')
  <div class="content">
    <div class="titlebox">
      <div class="title">
        <h3>Movie</h3>
      </div>
      <div class="btn_right">
        <!-- <a class="btn">Category</a> -->
      </div>
    </div>
    <!-- Movie LISTS -->
    @foreach($data->video as $c)
    <div class="music_box">
      <iframe width="560" height="315" src="{{$c->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <div class="category">
        <p>Movie</p>
      </div>
      <a class="music_title" href="/moviedetail/{{$c->id}}?title={{$c->title}}">{{$c->title}}</a>
    </div>
    @endforeach
    <!-- END Movie LISTS -->
  </div>
@endsection
