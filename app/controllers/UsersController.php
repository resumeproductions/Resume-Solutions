<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

		return View::make('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		User::create($data);

		return Redirect::route('users.index');
	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);

		return View::make('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		return View::make('users.edit', compact('user'));
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);

		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$user->update($data);

		return Redirect::route('users.index');
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);

		return Redirect::route('users.index');
	}

	public function doLogin() 
    {
        $user = Input::get('user');
        $email = Input::get('email');
        $password = Input::get('password');	public function doLogin() 
    {
        $user = Input::get('user');
        $email = Input::get('email');
        $password = Input::get('password');
        if (Auth::attempt(array('user' => $user, 'password' => $password)) || Auth::attempt(array('email' => $email, 'password' => $password))) {
            return Redirect::intended('/posts');
        } else {
            // Display session flash message , log email that tried to authenticate
            Session::flash('errorMessage' , 'Incorrect user or password.');
            return Redirect::action('PostController@index');
		}
    }

	public function doLogout() 
	{
		Auth::logout();
		return Redirect::to('posts');
	}
        if (Auth::attempt(array('user' => $user, 'password' => $password)) || Auth::attempt(array('email' => $email, 'password' => $password))) {
            return Redirect::intended('/posts');
        } else {
            // Display session flash message , log email that tried to authenticate
            Session::flash('errorMessage' , 'Incorrect user or password.');
            return Redirect::action('HomeController@showWelcome');
		}
    }

	public function doLogout() 
	{
		Auth::logout();
		return Redirect::to('posts');
	}

}
