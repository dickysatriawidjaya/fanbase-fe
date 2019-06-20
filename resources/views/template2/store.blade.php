@extends('template2/menu/menu')
@section('content')
  <div class="content">
    <div class="titlebox">
      <div class="title">
        <h3>STORE</h3>
      </div>
    </div>
    <!-- STORE LISTS -->
    <div class="store_box">
      <img class="hero_image" src="{{ asset('assets2/images/store/1.jpg') }}"/>
      <div class="product">
        <a class="product_title" href="#">Kill This Love</a>
        <div class="category">
          <p>IDLMs</p>
        </div>
        <p>￥3,780 (tax included)</p>
      </div>
    </div>
    <!-- END STORE LISTS -->
    <!-- STORE LISTS -->
    <div class="store_box">
      <img class="hero_image" src="{{ asset('assets2/images/store/2.jpeg') }}"/>
      <div class="product">
        <a class="product_title" href="#">Kill This Love</a>
        <div class="category exp">
          <p>2018AWTOUR</p>
        </div>
        <p class="exp">Reserve ended</p>
      </div>
    </div>
    <!-- END STORE LISTS -->
    <!-- STORE LISTS -->
    <div class="store_box">
      <img class="hero_image" src="{{ asset('assets2/images/store/3.jpg') }}"/>
      <div class="product">
        <a class="product_title" href="#">Kill This Love</a>
        <div class="category">
          <p>IDLMs</p>
        </div>
        <p>￥19,000 (tax included)</p>
      </div>
    </div>
    <!-- END STORE LISTS -->
    <!-- STORE LISTS -->
    <div class="store_box">
      <img class="hero_image" src="{{ asset('assets2/images/store/4.jpg') }}"/>
      <div class="product">
        <a class="product_title" href="#">Kill This Love</a>
        <div class="category exp">
          <p>2018AWTOUR</p>
        </div>
        <p class="exp">Reserve ended</p>
      </div>
    </div>
    <!-- END STORE LISTS -->
  </div>
@endsection
