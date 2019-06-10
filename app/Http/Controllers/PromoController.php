<?php
  namespace App\Http\Controllers;
  use View;
  class PromoController extends Controller{
    public function index()
    {
      return View::make('/home1/promo')->render();
    }
  }
 ?>
