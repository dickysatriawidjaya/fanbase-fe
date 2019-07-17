@extends('template4/menu/menu')
@section('content')
<!-- Content -->
  <section>
    <header class="main">
      <h1>News</h1>
    </header>

    <span class="image main"><img class="scale-in-center" src="{{ env('API_PREFIX').$data->web_main_banner }}" alt="" /></span>

    <hr class="major" />
    <div class="posts">
      <article>
        @foreach($data->content as $c)
        <h2><a class="news_title " href="/newsdetail/{{$c->id}}">{{ $c->title }}</a></h2>
        <p class="kategori">{{$c->tag}}</p>
        <p>{{ date("d M Y", strtotime($c->created_at)) }}</p>
        <hr class="major" />
        @endforeach
      </article>
    </div>
  </section>
  </div>
@endsection

