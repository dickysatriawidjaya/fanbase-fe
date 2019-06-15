<?php
  namespace App\Http\Controllers;
  use View;
  class Template1Controller extends Controller{
    public function index()
    {
      return View::make('/template1/home')->render();
    }
    public function news()
    {
      return View::make('/template1/news')->render();
    }
    public function newsdetail()
    {
      return View::make('/template1/newsdetail')->render();
    }
    public function live()
    {
      return View::make('/template1/live')->render();
    }
    public function media()
    {
      return View::make('/template1/media')->render();
    }
    public function music()
    {
      return View::make('/template1/music')->render();
    }
    public function movie()
    {
      return View::make('/template1/movie')->render();
    }
    public function store()
    {
      return View::make('/template1/store')->render();
    }
    public function lovers()
    {
      return View::make('/template1/lovers')->render();
    }
    public function profile()
    {
      return View::make('/template1/profile')->render();
    }
    public function link()
    {
      return View::make('/template1/link')->render();
    }
  }
 ?>
