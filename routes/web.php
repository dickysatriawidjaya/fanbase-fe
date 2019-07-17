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
Route::get('/','HomeController@index');

Route::get('/music','HomeController@music');
Route::get('/musicdetail/{id}','HomeController@get_foto_detail');
Route::get('/movie','HomeController@movie');
Route::get('/moviedetail/{id}','HomeController@get_movie_detail');
Route::get('/store','HomeController@store');
Route::get('/lovers','HomeController@lovers');
Route::get('/profile','HomeController@profile');
Route::get('/link','HomeController@link');

Route::get('{slug}/{id}', [
    'uses' => 'HomeController@category_content_detail' 
])->where('slug', '([A-Za-z0-9\-\/]+)');

Route::get('{slug}', [
    'uses' => 'HomeController@category_content' 
])->where('slug', '([A-Za-z0-9\-\/]+)');

//NOTES : web.php bakal selalu begini ga ada yang di tambahin. kalo mau ganti template tinggal ganti di /config/global.php