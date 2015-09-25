<?php

use \Esensi\Model\SoftModel;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends SoftModel implements UserInterface, RemindableInterface 
{

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	public $rules = array (
		'email' => 'required|email|max:100|unique:users',
		'first_name' => 'required|max:100',
		'last_name' => 'required|max:100',
		'password' => 'required|confirmed',
		'phone_number' => 'required|max:12',
		'zip' => 'required|max:5',
		'city' => 'required|max:100',
		'state' => 'required|max:100',
		'address' => 'required|max:100'
	);

	//Hash the password
	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function template1()
    {
        return $this->hasMany('Template1');
    }
    public function template2()
    {
        return $this->hasMany('Template2');
    }
    public function template3()
    {
        return $this->hasMany('Template3');
    }

}
