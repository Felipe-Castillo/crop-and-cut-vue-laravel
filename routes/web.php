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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::view('saveImage','showSaveImage');
Route::post('saveImage','ImagesController@saveImage');
Route::post('upload','ImagesController@upload')->name('upload');
Route::get('avatar','AvatarController@vue_avatar');

Route::get('/home', 'HomeController@index')->name('home');
