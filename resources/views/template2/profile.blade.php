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
      <h3>PROFILE</h3>
    </div>
  </div>
  <div class="profile_box">
  {!!$data->web_profile!!}
  </div>
</div>
@endsection
