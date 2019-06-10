<?php
  namespace App\Http\Controllers;
  use View;
  class Home1Controller extends Controller{
    public function index()
    {
      return View::make('home1')->render();
    }
  }
 ?>
