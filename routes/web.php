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

//Route::get('/{any}', 'ApplicationController')->where('any', '.*');

Route::view('/', 'pages.home')->name('home');

Route::get('/dashboard', 'ApplicationController')->where('any', '.*');
Route::get('/dashboard/{any}', 'ApplicationController')->where('any', '.*');
