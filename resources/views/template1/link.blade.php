@extends('template1/menu/menu')
@section('content')
<!--  section -->
<section class="page-info-section set-bg" data-setbg="{{ asset('assets3/img/page-info-bg.jpg') }}">
  <div class="container">
    <div class="section-title text-center">
      <h2>Charts</h2>
    </div>
  </div>
</section>
<!--  section end -->



<!-- Categories  section -->
<section class="categories-section">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="categorie">
          <img src="{{ asset('assets3/img/categories/1.jpg') }}" alt="">
          <h4>Summer</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="categorie">
          <img src="{{ asset('assets3/img/categories/2.jpg') }}" alt="">
          <h4>Pop</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="categorie">
          <img src="{{ asset('assets3/img/categories/3.jpg') }}" alt="">
          <h4>EDM</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="categorie">
          <img src="{{ asset('assets3/img/categories/4.jpg') }}" alt="">
          <h4>Mainstream</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="categorie">
          <img src="{{ asset('assets3/img/categories/5.jpg') }}" alt="">
          <h4>Techno</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="categorie">
          <img src="{{ asset('assets3/img/categories/6.jpg') }}" alt="">
          <h4>Oldies</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="categorie">
          <img src="{{ asset('assets3/img/categories/7.jpg') }}" alt="">
          <h4>Rock</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="categorie">
          <img src="{{ asset('assets3/img/categories/8.jpg') }}" alt="">
          <h4>Summer 2018</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Categories section end -->


<!-- Chart  section -->
<section class="chart-section">
  <div class="container">
    <div class="section-title text-center">
      <h2>This Week</h2>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <table class="chart-table">
          <tr>
            <td>1</td>
            <td><img src="{{ asset('assets3/img/chart/1.jpg') }}" alt="#"></td>
            <td>
              <h4>Girls Like You</h4>
              <p>Maroon 5 Featuring Cardi B </p>
            </td>
            <td>
              <a href="#"><img src="{{ asset('assets3/img/icons/youtube.png') }}" alt=""></a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td><img src="{{ asset('assets3/img/chart/2.jpg') }}" alt="#"></td>
            <td>
              <h4>I Like It </h4>
              <p>Cardi B, Bad Bunny & J Balvin </p>
            </td>
            <td>
              <a href="#"><img src="{{ asset('assets3/img/icons/youtube.png') }}" alt=""></a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td><img src="{{ asset('assets3/img/chart/3.jpg') }}" alt="#"></td>
            <td>
              <h4>Better Now</h4>
              <p>Post Malone</p>
            </td>
            <td>
              <a href="#"><img src="{{ asset('assets3/img/icons/youtube.png') }}" alt=""></a>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td><img src="{{ asset('assets3/img/chart/4.jpg') }}" alt="#"></td>
            <td>
              <h4>In My Feelings</h4>
              <p>Drake</p>
            </td>
            <td>
              <a href="#"><img src="{{ asset('assets3/img/icons/youtube.png') }}" alt=""></a>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td><img src="{{ asset('assets3/img/chart/5.jpg') }}" alt="#"></td>
            <td>
              <h4>Love Lies </h4>
              <p>Khalid & Normani </p>
            </td>
            <td>
              <a href="#"><img src="{{ asset('assets3/img/icons/youtube.png') }}" alt=""></a>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-lg-6">
        <table class="chart-table">
          <tr>
            <td>6</td>
            <td><img src="{{ asset('assets3/img/chart/6.jpg') }}" alt="#"></td>
            <td>
              <h4>Delicate</h4>
              <p>Taylor Swift</p>
            </td>
            <td>
              <a href="#"><img src="{{ asset('assets3/img/icons/youtube.png') }}" alt=""></a>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td><img src="{{ asset('assets3/img/chart/7.jpg') }}" alt="#"></td>
            <td>
              <h4>No Tears Left To Cry </h4>
              <p>Ariana Grande </p>
            </td>
            <td>
              <a href="#"><img src="{{ asset('assets3/img/icons/youtube.png') }}" alt=""></a>
            </td>
          </tr>
          <tr>
            <td>8</td>
            <td><img src="{{ asset('assets3/img/chart/8.jpg') }}" alt="#"></td>
            <td>
              <h4>Back To You </h4>
              <p>Selena Gomez </p>
            </td>
            <td>
              <a href="#"><img src="{{ asset('assets3/img/icons/youtube.png') }}" alt=""></a>
            </td>
          </tr>
          <tr>
            <td>9</td>
            <td><img src="{{ asset('assets3/img/chart/9.jpg') }}" alt="#"></td>
            <td>
              <h4>Boo'd Up </h4>
              <p>Ella Mai </p>
            </td>
            <td>
              <a href="#"><img src="{{ asset('assets3/img/icons/youtube.png') }}" alt=""></a>
            </td>
          </tr>
          <tr>
            <td>10</td>
            <td><img src="{{ asset('assets3/img/chart/10.jpg') }}" alt="#"></td>
            <td>
              <h4>The Middle </h4>
              <p>Zedd, Maren Morris & Grey </p>
            </td>
            <td>
              <a href="#"><img src="{{ asset('assets3/img/icons/youtube.png') }}" alt=""></a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>
<!--  Chart section end -->


<!--   section -->
<section class="-section">
</section>
<!--   section end -->

@endsection
