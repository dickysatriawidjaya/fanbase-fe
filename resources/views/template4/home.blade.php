@extends('template4/menu/menu')
@section('content')
<?php
 $web_banner = str_replace('\b','/b',env('API_PREFIX').$data->web_main_banner);
//  echo $web_banner;
?>
<!-- Banner -->
  <section id="banner">
    <div class="content">
      <header>
        <h1>{{$data->web_title}}</h1>
      </header>
      <p>{!!$data->web_profile!!}</p>
    </div>
    <span class="image object">
      <img src="{{ env('API_PREFIX').$data->web_main_banner }}" class="scale-in-center" alt="" />
    </span>
  </section>

<!-- Section -->
  <!-- <section>
    <header class="major">
      <h2>Erat lacinia</h2>
    </header>
    <div class="features">
      <article>
        <span class="icon fa-gem"></span>
        <div class="content">
          <h3>Portitor ullamcorper</h3>
          <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
        </div>
      </article>
      <article>
        <span class="icon solid fa-paper-plane"></span>
        <div class="content">
          <h3>Sapien veroeros</h3>
          <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
        </div>
      </article>
      <article>
        <span class="icon solid fa-rocket"></span>
        <div class="content">
          <h3>Quam lorem ipsum</h3>
          <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
        </div>
      </article>
      <article>
        <span class="icon solid fa-signal"></span>
        <div class="content">
          <h3>Sed magna finibus</h3>
          <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
        </div>
      </article>
    </div>
  </section> -->

<!-- Section -->
  <section>
    <header class="major">
      <h2>Ipsum sed dolor</h2>
    </header>
    <div class="posts">
      <article>
        <a href="/live" class="image"><img src="{{ asset('assets4/images/pic01.jpg') }}" alt="" /></a>
        <h3>Live</h3>
        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
        <ul class="actions">
          <li><a href="/live" class="button">More</a></li>
        </ul>
      </article>
      <article>
        <a href="/media" class="image"><img src="{{ asset('assets4/images/pic04.jpg') }}" alt="" /></a>
        <h3>Media</h3>
        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
        <ul class="actions">
          <li><a href="/media" class="button">More</a></li>
        </ul>
      </article>
      <article>
        <a href="/movie" class="image"><img src="{{ asset('assets4/images/pic05.jpg') }}" alt="" /></a>
        <h3>Movie</h3>
        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
        <ul class="actions">
          <li><a href="/movie" class="button">More</a></li>
        </ul>
      </article>
      <article>
        <a href="/music" class="image"><img src="{{ asset('assets4/images/pic06.jpg') }}" alt="" /></a>
        <h3>Music</h3>
        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
        <ul class="actions">
          <li><a href="/music" class="button">More</a></li>
        </ul>
      </article>
    </div>
  </section>

  @endsection
