@extends('template4/menu/menu')
@section('content')

<!-- Section -->
  <section>
    <header class="major">
      <h2>Music</h2>
    </header>
    <div class="posts">
      @foreach($data->foto as $c)
      <article>
        <a href="/musicdetail/{{$c->id}}?title={{$c->title}}" class="image"><img src="{{ env('API_PREFIX').$c->physical_path }}" alt="" /></a>
        <h3>Music</h3>
        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
        <ul class="actions">
          <li><a href="/musicdetail/{{$c->id}}?title={{$c->title}}" class="button">More</a></li>
        </ul>
      </article>
      @endforeach
    </div>
  </section>

@endsection
