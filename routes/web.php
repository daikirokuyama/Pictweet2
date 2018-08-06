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
    return view('welcome');
});

Auth::routes();
Route::get('/', 'TweetsController@index');
Route::resource('tweets', 'TweetsController');
Route::get('/tweets/{id}/delete', 'TweetsController@destroy');
Route::resource('users', 'UsersController', ['only' => 'show']);
Route::resource('tweets.comments', 'CommentsController');
Route::get('/logout', 'Auth\LoginController@logout');

