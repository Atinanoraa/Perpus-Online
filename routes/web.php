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



Route::get('login', 'LoginController@pageLogin');
Route::post('auth-login', 'LoginController@authLogin');
Route::post('logout', 'LoginController@logout');

Route::group(['middleware' => 'App\Http\Middleware\MemberMiddleware'], function () {
    Route::get('member', function ()
    {
        return view('perpus.member');
    });
});
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {


Route::get('/', 'HomeController@index')->name('home');

//rak
Route::get('rak', 'RakController@list');
Route::get('rak/create','RakController@create');
Route::post('rak/save','RakController@save');
Route::get('rak/edit/{id}','RakController@edit');
Route::post('rak/update/{id}','RakController@update');
Route::get('rak/delete/{id}','RakController@delete');

//kategori
Route::get("kategori","KategoriController@list");
Route::get("kategori/create","KategoriController@create");
Route::post("kategori/save","KategoriController@save");
Route::get("kategori/edit/{id}","KategoriController@edit");
Route::post("kategori/update/{id}","KategoriController@update");
Route::get("kategori/delete/{id}","KategoriController@delete");

//member
Route::get("user", "UserController@index");
Route::get("user/create", "UserController@create");
Route::post("user/save", "UserController@save");
Route::get("user/edit/{id}", "UserController@edit");
Route::post("user/update/{id}", "UserController@update");
Route::get("user/delete/{id}", "UserController@delete");

//buku
Route::get('buku', 'BukuController@show');
Route::get("buku/create", "BukuController@create");
Route::post("buku/save", "BukuController@save");
Route::get("buku/edit/{id}", "BukuController@edit");
Route::post("buku/update/{id}", "BukuController@update");
Route::get("buku/delete/{id}", "BukuController@delete");
Route::get("buku/location", "BukuController@lokasi");

//upload gambar
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
});

Route::group(['middleware' => 'App\Http\Middleware\MemberMiddleware'], function () {

    Route::get('member', function() {
        return view('perpus.member');
    });

});