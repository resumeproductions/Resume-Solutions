<?php

class Template extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function workExperience()
    {
    	return $this-hasMany('workExperience')
    }

    public function Portfolio()
    {
    	return $this-hasMany('Portfolio')
    }

    public function Skill()
    {
    	return $this-hasMany('Skill')
    }

    public function Contact()
    {
    	return $this-hasMany('Contact')
    }

    public function About()
    {
    	return $this-hasMany('About')
    }

}