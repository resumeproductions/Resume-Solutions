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

Route::get('/templates/1' , 'TemplatesController@DPTemplate');
Route::get('/templates/2' , 'TemplatesController@DPSTemplate');
Route::get('/templates/3' , 'TemplatesController@JCTemplate');
Route::get('/templates/4' , 'TemplatesController@Something');
Route::get('/templates/5' , 'TemplatesController@Something2');
Route::get('/templates/6' , 'TemplatesController@Something3');

Route::get('/home' , 'HomeController@showHome');
Route::post('login' , 'UsersController@doLogin');
Route::get('logout' , 'UsersController@doLogout');

Route::get('/' , 'HomeController@showWelcome');


Route::resource('users', 'UsersController');
Route::resource('templates', 'TemplatesController');

