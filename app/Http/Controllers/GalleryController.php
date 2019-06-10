<?php
  namespace App\Http\Controllers;
  use View;
  class GalleryController extends Controller{
    public function galpubg()
    {
      return View::make('/home1/galpubg')->render();
    }
    public function galapex()
    {
      return View::make('/home1/galapex')->render();
    }
  }
 ?>
