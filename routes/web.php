<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
route::get('home', 'HomeController@index');
route::get('/berita', 'HomeController@berita');
route::get('/dashboard', 'HomeController@dashboard');
route::get('/post/{slug}', 'HomeController@post');

route::get('/dokumen', 'BerkasController@index');
route::get('/data/{dokumen}', 'BerkasController@data');

route::get('/corona', 'CovidController@chart');

Route::get('/download/{id}','DownloadController@show')->name('downloadfile'); 
Route::get('/show','BerkasController@show'); 

Route::get('/files','DownloadController@index'); 
Route::get('/files/{id}','DownloadController@show'); 
Route::get('/files/download/{documen}','DownloadController@download'); 

Route::post('/upload','DownloadController@upload'); 
Route::get('/list','DownloadController@list'); 
Route::get('/show','DownloadController@show'); 
Route::get('/copy','DownloadController@copy'); 
Route::get('/move','DownloadController@move'); 
Route::get('/download','DownloadController@download'); 
Route::get('/delete','DownloadController@delete'); 

Route::get('/preview','BerkasController@preview'); 




// Route::get('/files/create','BerkasController@show'); 
// Route::get('/download','BerkasController@download'); 
// Route::get('/download','DownloadController@downfunc'); 

// route::get('/video', 'BerkasController@video');






Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
