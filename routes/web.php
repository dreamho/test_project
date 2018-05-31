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



Route::get('/', 'PageController@index');
Route::get('exampleone', 'PageController@exampleone');
Route::get('exampletwo', 'PageController@exampletwo');

Route::get('songs', 'SongController@index');

//Route::get('songsapi/get', 'Api\SongApi@get');
//Route::post('songsapi/save', 'Api\SongApi@save');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
