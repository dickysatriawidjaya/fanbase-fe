<?php
  namespace App\Http\Controllers;
  use View;
  class Template3Controller extends Controller{
    public function index()
    {
      return View::make('/template3/home')->render();
    }
    public function news()
    {
      return View::make('/template3/news')->render();
    }
    public function newsdetail()
    {
      return View::make('/template3/newsdetail')->render();
    }
    public function live()
    {
      return View::make('/template3/live')->render();
    }
    public function media()
    {
      return View::make('/template3/media')->render();
    }
    public function music()
    {
      return View::make('/template3/music')->render();
    }
    public function movie()
    {
      return View::make('/template3/movie')->render();
    }
    public function store()
    {
      return View::make('/template3/store')->render();
    }
    public function lovers()
    {
      return View::make('/template3/lovers')->render();
    }
    public function profile()
    {
      return View::make('/template3/profile')->render();
    }
    public function link()
    {
      return View::make('/template3/link')->render();
    }
    public function detail1()
    {
      return View::make('/template3/detail/detail1')->render();
    }
    public function detail2()
    {
      return View::make('/template3/detail/detail2')->render();
    }
    public function detail3()
    {
      return View::make('/template3/detail/detail3')->render();
    }
  }
 ?>
