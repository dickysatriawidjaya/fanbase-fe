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
        <h3>LIVE</h3>
      </div>
      <div class="btn_right">
        <a class="btn" href="#">Past Live</a>
      </div>
      <div class="btn_right">
        <a class="btn" href="#">Category</a>
      </div>
    </div>
    <!-- LIVE LISTS -->
    @foreach($data->content as $c)
    <div class="list_box_live">
      <div class="category">
        <p>{{$c->tag}}</p>
      </div>
      <a class="live_a" href="/livedetail/{{$c->id}}?title={{$c->title}}">
      <div class="list_title">
       <h4>  {{$c->title}}</h4>
      </div>
      <div class="live_title">
        <p>{{ date("d M Y", strtotime($c->created_at))}}</p>
      </div>
      </a>
    </div>
    @endforeach
    <!-- END LIVE LISTS -->
    <!-- LIVE LISTS -->
    <!-- <div class="list_box_live">
      <div class="category">
        <p>Onegirl Live</p>
      </div>
      <a class="live_a" href="#">
      <div class="list_title">
       <h4> 5, Jul. 2019 (Fri) - 新木場STUDIO COAST</h4>
      </div>
      <div class="live_title">
        <p>ESP学園presents COLORS2019</p>
      </div>
      </a>
    </div> -->
    <!-- END LIVE LISTS -->
  </div>
@endsection
