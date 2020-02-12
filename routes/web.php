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

Route::get('/', function () {
    return view('index');
});

Route::get('/profil', function () {
    return view('Profil');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout','Auth\LoginController@logout');

Route::group(['prefix' => 'admin','middleware' => ['auth']],
function () {
    Route::get('/', function() {
        return view ('admin.index');
    });
    Route::resource('/artikel','ArtikelController');
    Route::resource('/tag','TagController');
    Route::resource('/guru','GuruController');
    Route::resource('/fasilitas','FasilitasController');
    Route::resource('/agenda','AgendaController');
});
