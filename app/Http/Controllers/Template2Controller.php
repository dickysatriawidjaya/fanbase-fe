<?php
  namespace App\Http\Controllers;
  use View;
  class Template2Controller extends Controller{
    public function index()
    {
      return View::make('/template2/home')->render();
    }
    public function news()
    {
      return View::make('/template2/news')->render();
    }
    public function newsdetail()
    {
      return View::make('/template2/newsdetail')->render();
    }
    public function live()
    {
      return View::make('/template2/live')->render();
    }
    public function media()
    {
      return View::make('/template2/media')->render();
    }
    public function music()
    {
      return View::make('/template2/music')->render();
    }
    public function movie()
    {
      return View::make('/template2/movie')->render();
    }
    public function store()
    {
      return View::make('/template2/store')->render();
    }
    public function lovers()
    {
      return View::make('/template2/lovers')->render();
    }
    public function profile()
    {
      return View::make('/template2/profile')->render();
    }
    public function link()
    {
      return View::make('/template2/link')->render();
    }
  }
 ?>
