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
// template1
Route::get('/template1','Template1Controller@index');
Route::get('/template1/about','Template1Controller@about');
Route::get('/template1/live','Template1Controller@live');
Route::get('/template1/media','Template1Controller@media');
Route::get('/template1/music','Template1Controller@music');
Route::get('/template1/movie','Template1Controller@movie');
Route::get('/template1/store','Template1Controller@store');
Route::get('/template1/lovers','Template1Controller@lovers');
Route::get('/template1/profile','Template1Controller@profile');
Route::get('/template1/link','Template1Controller@link');


Route::get('/home1','HomeController@index');

// template2
Route::get('/','Home1Controller@index');
Route::get('/promo','PromoController@index');
Route::get('/galpubg','GalleryController@galpubg');
Route::get('/galapex','GalleryController@galapex');
Route::get('/newslist','NewsListController@index');
Route::get('/news','NewsListController@news');

// template3
Route::get('/template3','Template3Controller@index');
