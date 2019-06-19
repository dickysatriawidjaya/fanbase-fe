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
      $template_id = $config['web_data']['template'];
      $url =  env("API_URL");
      $response = Curl::to($url.'get_data')
                  ->withHeader('api_key:'.$api_key)
                  ->withHeader('secret_key:'.$secret_key)
                  ->asJson()
                  ->post();
      $data =  $response->message;
      // return dd($data);
      return View::make('template'.$template_id.'/home')->with('data',$data)->render();
    }

    public function news(){
      $config = Config::get("global");
      $api_key = $config['web_data']['api_key'];
      $secret_key = $config['web_data']['secret_key'];
      $template_id = $config['web_data']['template'];
      $url =  env("API_URL");
      $response = Curl::to($url.'content')
                  ->withHeader('api_key:'.$api_key)
                  ->withHeader('secret_key:'.$secret_key)
                  ->withData(array('content'=>"News"))
                  ->asJson()
                  ->post();
      $data =  $response->message;
      // return dd($data);
      return View::make('template'.$template_id.'/news')->with('data',$data)->render();
    }

    public function news_detail($id){
      $config = Config::get("global");
      $api_key = $config['web_data']['api_key'];
      $secret_key = $config['web_data']['secret_key'];
      $template_id = $config['web_data']['template'];
      $url =  env("API_URL");
      $response = Curl::to($url.'content')
                  ->withHeader('api_key:'.$api_key)
                  ->withHeader('secret_key:'.$secret_key)
                  ->withData(array('content'=>"News",'detail_id'=>$id))
                  ->asJson()
                  ->post();
      $data =  $response->message;
      // return dd($data);
      return View::make('template'.$template_id.'/newsdetail')->with('data',$data)->render();
    }

  }

 ?>
