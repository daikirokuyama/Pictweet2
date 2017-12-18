<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();
Route::get('/', 'TweetsController@index');
Route::get('/tweets', 'TweetsController@index');
Route::get('/tweets/create', 'TweetsController@create');
Route::post('/tweets', 'TweetsController@store');
Route::get('/users/{id}', 'UsersController@show');
Route::get('/tweets/{id}/delete', 'TweetsController@destroy');
Route::get('/tweets/{id}/edit', 'TweetsController@edit');
Route::patch('/tweets/{id}', 'TweetsController@update');
