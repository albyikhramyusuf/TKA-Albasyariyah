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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout','Auth\LoginController@logout');

Route::group(['prefix' => 'admin','middleware' => ['auth']],
function () {
    Route::get('/', function() {
        return view ('admin.index');
    });
});
