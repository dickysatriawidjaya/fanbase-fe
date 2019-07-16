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
        <h1>Profile<br />
      </header>
      <p>{!!$data->web_profile!!}</p>
    </div>
    <span class="image object">
      <img src="{{ env('API_PREFIX').$data->web_main_banner }}" class="scale-in-center" alt="" />
    </span>
  </section>

  @endsection
