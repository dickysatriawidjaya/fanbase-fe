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

<<<<<<< HEAD
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
Route::get('/template2/detail/detail','Template2Controller@detail');

// template3
Route::get('/template3','Template3Controller@index');
Route::get('/template3/news','Template3Controller@news');
Route::get('/template3/newsdetail','Template3Controller@newsdetail');
Route::get('/template3/live','Template3Controller@live');
Route::get('/template3/media','Template3Controller@media');
Route::get('/template3/music','Template3Controller@music');
Route::get('/template3/movie','Template3Controller@movie');
Route::get('/template3/store','Template3Controller@store');
Route::get('/template3/lovers','Template3Controller@lovers');
Route::get('/template3/profile','Template3Controller@profile');
Route::get('/template3/link','Template3Controller@link');
Route::get('/template3/detail/detail1','Template3Controller@detail1');
Route::get('/template3/detail/detail2','Template3Controller@detail2');
Route::get('/template3/detail/detail3','Template3Controller@detail3');

// Template 4
Route::get('template4/','Template4Controller@index');
=======
Route::get('{slug}', [
    'uses' => 'HomeController@category_content' 
])->where('slug', '([A-Za-z0-9\-\/]+)');
>>>>>>> 99df31eb9707fc01d1bb26cdc3767ba10e2afc6b
