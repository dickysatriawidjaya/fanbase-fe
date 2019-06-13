<?php
  namespace App\Http\Controllers;
  use View;
  class Template3Controller extends Controller{
    public function index()
    {
      return View::make('/template3/home')->render();
    }
  }
 ?>
