@extends('template4/menu/menu')
@section('content')
<!-- Content -->
  <section>
    <header class="main">
      <h1>News Detail</h1>
    </header>

    <span class="image main"><img src="{{ env('API_PREFIX').$data->content->image_banner }}" alt="" /></span>

    <hr class="major" />

    <h2>{{$data->content->title}}</h2>
    <p>{{ date("d M Y", strtotime($data->content->created_at)) }}</p>
    <p>{{$data->content->content}}</p>

    <hr class="major" />

  </section>
@endsection
