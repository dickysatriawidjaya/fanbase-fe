@extends('template4/menu/menu')
@section('content')
<!-- Content -->
  <section>
    <header class="main">
      <h1>Music Detail</h1>
    </header>

    <span class="image main"><img src="" alt="" /></span>

    <hr class="major" />

    <h2>{{$data->foto->title}}</h2>
    <p>{{ date("d M Y", strtotime($data->foto->created_at)) }}</p>
    <p>{{$data->foto->description}}</p>

    <hr class="major" />

  </section>
@endsection
