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
// template1
Route::get('/template1','Template1Controller@index');
Route::get('/news','HomeController@news');
Route::get('/newsdetail/{id}','HomeController@news_detail');
Route::get('/live','HomeController@live');
Route::get('/livedetail/{id}','HomeController@live_detail');
Route::get('/media','HomeController@media');
Route::get('/mediadetail/{id}','HomeController@media_detail');
Route::get('/music','HomeController@music');
Route::get('/musicdetail/{id}','HomeController@get_foto_detail');
Route::get('/movie','HomeController@movie');
Route::get('/moviedetail/{id}','HomeController@get_movie_detail');
Route::get('/store','HomeController@store');
Route::get('/lovers','HomeController@lovers');
Route::get('/profile','HomeController@profile');
Route::get('/link','HomeController@link');

//template2
Route::get('/template2','Template2Controller@index');
Route::get('/template2/news','Template2Controller@news');
Route::get('/template2/newsdetail','Template2Controller@newsdetail');
Route::get('/template2/live','Template2Controller@live');
Route::get('/template2/media','Template2Controller@media');
Route::get('/template2/music','Template2Controller@music');
Route::get('/template2/movie','Template2Controller@movie');
Route::get('/template2/store','Template2Controller@store');
Route::get('/template2/lovers','Template2Controller@lovers');
Route::get('/template2/profile','Template2Controller@profile');
Route::get('/template2/link','Template2Controller@link');

// template2
Route::get('/','HomeController@index');
Route::get('/promo','PromoController@index');
Route::get('/galpubg','GalleryController@galpubg');
Route::get('/galapex','GalleryController@galapex');
Route::get('/newslist','NewsListController@index');
// Route::get('/news','NewsListController@news');

// template3
Route::get('/template3','Template3Controller@index');
