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
Route::get('/', function()
{ 
	return View::make('hello');
});

Route::resource('users', 'UsersController');
Route::resource('templates', 'TemplatesController');

