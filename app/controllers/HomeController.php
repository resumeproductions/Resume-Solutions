<?php

class HomeController extends BaseController {

	public function __construct()
	{
		parent::__construct(); 
		$this->beforeFilter('auth', array('except' => array('showWelcome'))); 
	}

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		if (Auth::check())
		{
		    return View::make('users.index');
		}
		return View::make('hello');
	}

	public function showHome()
	{
		return View::make('users.index');
	}



	

}
