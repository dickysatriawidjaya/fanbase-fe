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
                  ->withHeader('api-key:'.$api_key)
                  ->withHeader('secret-key:'.$secret_key)
                  ->asJson()
                  ->post();
      $data =  $response->message;
      return View::make('template'.$template_id.'/home')->with('data',$data)->render();
    }

    public function category_content($slug){
      $config = Config::get("global");
      $api_key = $config['web_data']['api_key'];
      $secret_key = $config['web_data']['secret_key'];
      $template_id = $config['web_data']['template'];
      $url =  env("API_URL");
      $response = Curl::to($url.'content')
                  ->withHeader('api-key:'.$api_key)
                  ->withHeader('secret-key:'.$secret_key)
                  ->withData(array('content'=>$slug))
                  ->asJson()
                  ->post();

      $data =  $response->message;
      return View::make('template'.$template_id.'/category')->with('data',$data)->render();
    }

    public function category_content_detail($slug,$id){
      $config = Config::get("global");
      $api_key = $config['web_data']['api_key'];
      $secret_key = $config['web_data']['secret_key'];
      $template_id = $config['web_data']['template'];
      $url =  env("API_URL");
      $response = Curl::to($url.'content')
                  ->withHeader('api-key:'.$api_key)
                  ->withHeader('secret-key:'.$secret_key)
                  ->withData(array('content'=>$slug,'detail_id'=>$id))
                  ->asJson()
                  ->post();
      $data =  $response->message;
      return View::make('template'.$template_id.'/category_detail')->with('data',$data)->render();

    }

    public function music(){
      $config = Config::get("global");
      $api_key = $config['web_data']['api_key'];
      $secret_key = $config['web_data']['secret_key'];
      $template_id = $config['web_data']['template'];
      $url =  env("API_URL");
      $response = Curl::to($url.'get_data')
                  ->withHeader('api-key:'.$api_key)
                  ->withHeader('secret-key:'.$secret_key)
                  ->withData(array('menu'=>"music"))
                  ->asJson()
                  ->post();
      $data =  $response->message;
      // return dd($data);
      return View::make('template'.$template_id.'/music')->with('data',$data)->render();
    }

    public function get_foto_detail($id){
      $config = Config::get("global");
      $api_key = $config['web_data']['api_key'];
      $secret_key = $config['web_data']['secret_key'];
      $template_id = $config['web_data']['template'];
      $url =  env("API_URL");
      $response = Curl::to($url.'get_foto_detail/'.$id)
                  ->withHeader('api-key:'.$api_key)
                  ->withHeader('secret-key:'.$secret_key)
                  ->asJson()
                  ->post();
      $data =  $response->message;
      // return dd($data);
      return View::make('template'.$template_id.'/musicdetail')->with('data',$data)->render();
    }

    public function movie(){
      $config = Config::get("global");
      $api_key = $config['web_data']['api_key'];
      $secret_key = $config['web_data']['secret_key'];
      $template_id = $config['web_data']['template'];
      $url =  env("API_URL");
      $response = Curl::to($url.'get_data')
                  ->withHeader('api-key:'.$api_key)
                  ->withHeader('secret-key:'.$secret_key)
                  ->withData(array('menu'=>"video"))
                  ->asJson()
                  ->post();
      $data =  $response->message;
      // return dd($data);
      return View::make('template'.$template_id.'/movie')->with('data',$data)->render();
    }

    public function get_movie_detail($id){
      $config = Config::get("global");
      $api_key = $config['web_data']['api_key'];
      $secret_key = $config['web_data']['secret_key'];
      $template_id = $config['web_data']['template'];
      $url =  env("API_URL");
      $response = Curl::to($url.'get_video_detail/'.$id)
                  ->withHeader('api-key:'.$api_key)
                  ->withHeader('secret-key:'.$secret_key)
                  ->asJson()
                  ->post();
      $data =  $response->message;
      // return dd($data);
      return View::make('template'.$template_id.'/moviedetail')->with('data',$data)->render();
    }

    public function profile(){
      $config = Config::get("global");
      $api_key = $config['web_data']['api_key'];
      $secret_key = $config['web_data']['secret_key'];
      $template_id = $config['web_data']['template'];
      $url =  env("API_URL");
      $response = Curl::to($url.'get_data')
                  ->withHeader('api-key:'.$api_key)
                  ->withHeader('secret-key:'.$secret_key)
                  ->withData(array('menu'=>"profile"))
                  ->asJson()
                  ->post();
      $data =  $response->message;
      // return dd($data);
      return View::make('template'.$template_id.'/profile')->with('data',$data)->render();
    }

    public function store()
    {
      $config = Config::get("global");
      $api_key = $config['web_data']['api_key'];
      $secret_key = $config['web_data']['secret_key'];
      $template_id = $config['web_data']['template'];
      $url =  env("API_URL");
      $response = Curl::to($url.'get_data')
                  ->withHeader('api-key:'.$api_key)
                  ->withHeader('secret-key:'.$secret_key)
                  ->asJson()
                  ->post();
      $data =  $response->message;
      return View::make('template'.$template_id.'/store')->with('data',$data)->render();
    }
    public function lovers()
    {
      $config = Config::get("global");
      $api_key = $config['web_data']['api_key'];
      $secret_key = $config['web_data']['secret_key'];
      $template_id = $config['web_data']['template'];
      $url =  env("API_URL");
      $response = Curl::to($url.'get_data')
                  ->withHeader('api-key:'.$api_key)
                  ->withHeader('secret-key:'.$secret_key)
                  ->asJson()
                  ->post();
      $data =  $response->message;

      return View::make('template'.$template_id.'/lovers')->with('data',$data)->render();
    }
    public function link()
    {
      $config = Config::get("global");
      $api_key = $config['web_data']['api_key'];
      $secret_key = $config['web_data']['secret_key'];
      $template_id = $config['web_data']['template'];
      $url =  env("API_URL");
      $response = Curl::to($url.'get_data')
                  ->withHeader('api-key:'.$api_key)
                  ->withHeader('secret-key:'.$secret_key)
                  ->asJson()
                  ->post();
      $data =  $response->message;
      return View::make('template'.$template_id.'/link')->with('data',$data)->render();
    }
  }

 ?>
