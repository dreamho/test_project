<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->get('get', 'Api\SongApi@get');
Route::middleware('auth:api')->post('save', 'Api\SongApi@save');
Route::middleware('auth:api')->get('edit/{id}', 'Api\SongApi@getById');
Route::middleware('auth:api')->post('edit', 'Api\SongApi@edit');
Route::middleware('auth:api')->get('delete/{id}', 'Api\SongApi@delete');


Route::get('register', 'Api\ApiRegisterController@showRegisterForm');
Route::get('login', 'Api\ApiLoginController@showLoginForm');
Route::post('user/register', 'Api\ApiRegisterController@register');
Route::post('user/login', 'Api\ApiLoginController@login');

Route::middleware('jwt.auth')->get('users', function(Request $request) {
    return auth()->user();
});
