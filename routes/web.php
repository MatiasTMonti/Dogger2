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
    return view('pages/index');
});
Route::get('/perfil', function () {
    return view('pages/perfil');
});
Route::get('/timeline', function () {
    return view('pages/timeline');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');