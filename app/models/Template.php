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
    	return $this->hasMany('WorkExperience');
    }

    public function portfolios()
    {
    	return $this->hasMany('Portfolio');
    }

    public function knowledge()
    {
        return $this->hasMany('Knowledge');
    }

    public function awards()
    {
        return $this->hasMany('Award');
    }

    public function headers()
    {
        return $this->hasMany('Header1');
    }

    public function education()
    {
        return $this->hasMany('Education');
    }

    public function skills()
    {
    	return $this->hasMany('Skill');
    }

    public function contacts()
    {
    	return $this->hasOne('Contact');
    }

    public function abouts()
    {
    	return $this->hasOne('About');
    }

    public function users()
    {
        return $this->belongsTo('User');
    }

}