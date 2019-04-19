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

Route::get('/','FrontEndController@index');
Route::get('about','FrontEndController@about');
Route::get('artists','FrontEndController@artists');
Route::get('blog','FrontEndController@blog');
Route::get('signup','FrontEndController@signup');
