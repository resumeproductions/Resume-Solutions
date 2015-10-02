<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('templates/choose' , 'TemplatesController@chooseTemplate');

Route::get('/home' , 'HomeController@showHome');
Route::post('/login' , 'UsersController@doLogin');
Route::get('/logout' , 'UsersController@doLogout');

Route::get('/' , 'HomeController@showWelcome');

Route::get('users/me', 'UsersController@getProfile');

Route::resource('users', 'UsersController');
Route::resource('templates', 'TemplatesController');

