<?php

  namespace App\Http\Controllers;
  use View;
  use Curl;
  use Config;
  class HomeController extends Controller{

    public function index()
    {
      $config = Config::get("global");
      $api_key = $config['web_data']['api_key'];
      $secret_key = $config['web_data']['secret_key'];
      $template = $config['web_data']['template'];
      $url =  env("API_URL");
      $response = Curl::to($url.'get_data')
                  ->withHeader('api_key:'.$api_key)
                  ->withHeader('secret_key:'.$secret_key)
                  ->asJson()
                  ->post();
      $data =  $response->message[0];
      return View::make('template'.$template.'/home')->with('data',$data)->render();
    }

  }

 ?>
