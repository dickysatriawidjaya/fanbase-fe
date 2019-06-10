<?php
  namespace App\Http\Controllers;
  use View;
  class NewsListController extends Controller{
    public function index()
    {
      return View::make('/home1/news-list')->render();
    }
    public function news()
    {
      return View::make('/home1/news')->render();
    }
  }
 ?>
