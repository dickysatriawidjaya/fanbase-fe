@extends('template1/menu/menu')
@section('content')

<!--  section -->
<section class="page-info-section set-bg" data-setbg="{{ asset('assets3/img/page-info-bg.jpg') }}">
  <div class="container">
    <div class="section-title text-center">
      <h2>Gallery</h2>
    </div>
  </div>
</section>
<!--  section end -->


<!--  Dj,s section -->
<section class="djs-section">
  <div class="container-fluid p-0">
    <div class="dj-team">
      <div class="col-1-5">
        <div class="dj-single">
          <img src="{{ asset('assets3/img/djs/antv.jpg') }}" alt="">
          <div class="dj-info-warp">
            <div class="dj-info">
              <h4>TV Show</h4>
              <p>@Antv</p>
            </div>
            <div class="dj-social-links">
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-soundcloud"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-1-5">
        <div class="dj-single">
          <img src="{{ asset('assets3/img/djs/sctv.jpg') }}" alt="">
          <div class="dj-info-warp">
            <div class="dj-info">
              <h4>TV Show</h4>
              <p>@SCTV</p>
            </div>
            <div class="dj-social-links">
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-soundcloud"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-1-5">
        <div class="dj-single">
          <img src="{{ asset('assets3/img/djs/indosiar.jpg') }}" alt="">
          <div class="dj-info-warp">
            <div class="dj-info">
              <h4>TV Show</h4>
              <p>@indosiar</p>
            </div>
            <div class="dj-social-links">
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-soundcloud"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-1-5">
        <div class="dj-single">
          <img src="{{ asset('assets3/img/djs/nettv.jpg') }}" alt="">
          <div class="dj-info-warp">
            <div class="dj-info">
              <h4>TV Show</h4>
              <p>@Net Tv</p>
            </div>
            <div class="dj-social-links">
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-soundcloud"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-1-5">
        <div class="dj-single">
          <img src="{{ asset('assets3/img/djs/lativi.jpg') }}" alt="">
          <div class="dj-info-warp">
            <div class="dj-info">
              <h4>TV Show</h4>
              <p>@Lativi</p>
            </div>
            <div class="dj-social-links">
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-soundcloud"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  Dj,s section end -->

@endsection
