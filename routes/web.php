<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home1','HomeController@index');

// template2
Route::get('/','Home1Controller@index');
Route::get('/promo','PromoController@index');
Route::get('/galpubg','GalleryController@galpubg');
Route::get('/galapex','GalleryController@galapex');
Route::get('/newslist','NewsListController@index');
Route::get('/news','NewsListController@news');
