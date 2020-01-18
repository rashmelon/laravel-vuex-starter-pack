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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth:api')->resource('users', 'UserController');

Route::post('login', 'LoginController@login');

Route::group(['prefix' => 'user', 'middleware' => 'auth:api'], function () {
    Route::post('{id}', 'UserController@update');
    Route::get('{id}', 'UserController@show');
    Route::delete('{id}', 'UserController@destroy');
    Route::resource('', 'UserController');
});

Route::group(['prefix' => 'role', 'middleware' => 'auth:api'], function () {
    Route::post('{id}', 'RoleController@update');
    Route::get('{id}', 'RoleController@show');
    Route::delete('{id}', 'RoleController@destroy');
    Route::resource('', 'RoleController');
});

Route::middleware('auth:api')->get('permission', 'PermissionController@index');

