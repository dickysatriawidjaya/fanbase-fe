<?php
  namespace App\Http\Controllers;
  use View;
  class Template4Controller extends Controller{
    public function index()
    {
      return View::make('/template4/home')->render();
    }
    public function news()
    {
      return View::make('/template4/news')->render();
    }
    public function newsdetail()
    {
      return View::make('/template4/newsdetail')->render();
    }
    public function live()
    {
      return View::make('/template4/live')->render();
    }
    public function media()
    {
      return View::make('/template4/media')->render();
    }
    public function music()
    {
      return View::make('/template4/music')->render();
    }
    public function movie()
    {
      return View::make('/template4/movie')->render();
    }
    public function store()
    {
      return View::make('/template4/store')->render();
    }
    public function lovers()
    {
      return View::make('/template4/lovers')->render();
    }
    public function profile()
    {
      return View::make('/template4/profile')->render();
    }
    public function link()
    {
      return View::make('/template4/link')->render();
    }
    public function detail()
    {
      return View::make('/template4/detail/detail')->render();
    }
  }
 ?>
