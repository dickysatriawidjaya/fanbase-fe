@extends('template2/menu/menu')
@section('content')
<div class="head">
  <div class="hero">
    <img class="hero_image" src="{{ asset('assets2/images/bpheader.jpg') }}"/>
  </div>
</div>
<div class="content">
  <div class="titlebox">
    <div class="title">
      <h3>PROFILE</h3>
    </div>
  </div>
  <div class="profile_box">
    <h4>Detail Page</h4>
    <div class="list_box">
      <div class="category">
        <p>Release</p>
      </div>
      <div class="list_title">
        <a class="news_title" href="#">約3年ぶりとなるフルアルバムのリリースが決定!</a>
      </div>
      <div class="list_date">
        <p>31, Mar. 2019</p>
      </div>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>
@endsection
