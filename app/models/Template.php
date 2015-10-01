<?php

class Template extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function workExperiences()
    {
    	return $this-hasMany('WorkExperience');
    }

    public function portfolios()
    {
    	return $this-hasMany('Portfolio');
    }

    public function skills()
    {
    	return $this-hasMany('Skill');
    }

    public function contacts()
    {
    	return $this-hasMany('Contact');
    }

    public function abouts()
    {
    	return $this-hasMany('About');
    }

    public function user()
    {
        return $this-belongsTo('user');
    }

}