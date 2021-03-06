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

    public function knowledges()
    {
        return $this->hasMany('Knowledge');
    }

    public function awards()
    {
        return $this->hasMany('Award');
    }

    public function header()
    {
        return $this->hasOne('Header1');
    }

    public function educations()
    {
        return $this->hasMany('Education');
    }

    public function skills()
    {
    	return $this->hasMany('Skill');
    }

    public function services()
    {
        return $this->hasMany('Service');
    }


    public function contact()
    {
    	return $this->hasOne('Contact');
    }

    public function abouts()
    {
    	return $this->hasMany('About');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

}