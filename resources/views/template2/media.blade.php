@extends('template2/menu/menu')
@section('content')
  <div class="head">
    <div class="hero">
      <img class="hero_image" src="{{ env('API_PREFIX').$data->web_main_banner }}"/>
    </div>
  </div>
  <div class="content">
    <div class="titlebox">
      <div class="title">
        <h3>MEDIA</h3>
      </div>
    </div>
    <!-- MEDIA LISTS -->
    @foreach($data->content as $c)
    <div class="list_box">
      <div class="category">
        <p>{{$c->tag}}</p>
      </div>
      <div class="list_title">
        <a class="news_title" href="/mediadetail/{{$c->id}}?title={{$c->title}}">{{$c->title}}</a>
      </div>
      <div class="list_date">
        <p>{{ date("d M Y", strtotime($c->created_at)) }}</p>
      </div>
    </div>
    @endforeach
    <!-- END MEDIA LISTS -->
  </div>
@endsection
