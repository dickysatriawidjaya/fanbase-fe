@extends('template4/menu/menu')
@section('content')
<!-- Content -->
  <section>
    <header class="main">
      <h1>Media</h1>
    </header>

    <span class="image main"><img class="scale-in-center" src="{{ env('API_PREFIX').$data->web_main_banner }}" alt="" /></span>

    <hr class="major" />
    @foreach($data->content as $c)
    <h2><a class="news_title " href="/mediadetail/{{$c->id}}">{{ $c->title }}</a></h2>
    <p class="kategori">{{$c->tag}}</p>
    <p>{{ date("d M Y", strtotime($c->created_at)) }}</p>

    <hr class="major" />
    @endforeach
  </section>
  </div>
@endsection
