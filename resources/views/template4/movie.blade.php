@extends('template4/menu/menu')
@section('content')

<!-- Section -->
  <section>
    <header class="major">
      <h2>Movie</h2>
    </header>
    <div class="posts">
      @foreach($data->video as $c)
      <article>
        <iframe width="560" height="315" src="{{$c->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h3>{{$c->title}}</h3>
        <ul class="actions">
          <li><a href="/musicdetail/{{$c->id}}?title={{$c->title}}" class="button">More</a></li>
        </ul>
      </article>
      <article>
        <iframe width="560" height="315" src="{{$c->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h3>{{$c->title}}</h3>
        <ul class="actions">
          <li><a href="/musicdetail/{{$c->id}}?title={{$c->title}}" class="button">More</a></li>
        </ul>
      </article>
      @endforeach
    </div>
  </section>

@endsection
