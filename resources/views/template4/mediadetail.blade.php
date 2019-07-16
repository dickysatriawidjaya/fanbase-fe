@extends('template4/menu/menu')
@section('content')
<!-- Content -->
  <section>
    <header class="main">
      <h1>Media Detail</h1>
    </header>

    <span class="image main"><img src="" alt="" /></span>

    <hr class="major" />

    <h2>{{$data->content->title}}</h2>
    <p>{{ date("d M Y", strtotime($data->content->created_at)) }}</p>
    <p>{{$data->content->content}}</p>

    <hr class="major" />

  </section>
@endsection
