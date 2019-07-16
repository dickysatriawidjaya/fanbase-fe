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
      <h3>LINK</h3>
    </div>
  </div>
  <div class="link_box">
    <table>
      <tr>
        <td>Facebook</td>
        <td>https://www.facebook.com/rockidlms</td>
      </tr>
      <tr>
        <td>Twitter</td>
        <td>https://twitter.com/IDLMs_OFFICIAL</td>
      </tr>
      <tr>
        <td>Instagram</td>
        <td>http://instagram.com/IDLMs.OFFICIAL</td>
      </tr>
      <tr>
        <td>Youtube</td>
        <td>https://www.youtube.com/user/IDLMsofficial</td>
      </tr>
    </table>
  </div>
</div>
@endsection
