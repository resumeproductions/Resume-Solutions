<?php

class UsersController extends \BaseController {

	public function __construct()
	{
		parent::__construct(); 
		$this->beforeFilter('auth', array('except' => array('index', 'create', 'store', 'doLogin'))); 
	}

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
		if(Input::hasFile('profile_img_url')){
			$file = Input::file('profile_img_url');
			$destinationPath = public_path() . '/img';
			$filename = $file->getClientOriginalName();
			Input::file('profile_img_url')->move($destinationPath, $filename);

			$user = new User();
			$user->password = Input::get('password');
			$user->email = Input::get('email');
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->username = Input::get('username');
			$user->address = Input::get('address');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->zip = Input::get('zip_code');
			$user->phone_number = Input::get('phone_number');
			$user->profile_img_url = $filename; 
			$user->save();


			Session::flash('successMessage', 'Account created successfully! You may now login.');
			return Redirect::action('HomeController@showWelcome');
		}else{
			$user = new User();
			$user->password = Input::get('password');
			$user->email = Input::get('email');
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->username = Input::get('username');
			$user->address = Input::get('address');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->zip = Input::get('zip_code');
			$user->phone_number = Input::get('phone_number');
			$user->save();


			Session::flash('successMessage', 'Account created successfully! You may now login.');
			return Redirect::action('HomeController@showWelcome');
		}
	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('users.profile');
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
        $email = Input::get('email'); 
		$password = Input::get('password'); 


		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			Session::flash('successMessage', 'Logged in successfully!');
			return Redirect::action('HomeController@showHome');
		} else {
			Session::flash('errorMessage', 'Logged in failed!'); 
			return Redirect::action('HomeController@showWelcome');
		}
    }


	public function doLogout() 
	{
		Auth::logout(); 
		Session::flash('errorMessage', 'Logged out!'); 
		return Redirect::action('HomeController@showWelcome');
	}

}
