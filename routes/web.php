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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/codes', 'PagesController@codes');
Route::get('/planes', 'PagesController@planes');
Route::get('/posts', 'PagesController@posts');
Route::get('/contact', 'PagesController@contact');
Route::get('/message', 'PagesController@message');
Route::resource('posts', 'PostsController');