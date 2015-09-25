<?php

use Esensi\Model\SoftModel;

class Template1 extends SoftModel {
	protected $table = 'template3';

	// Don't forget to fill this array
	protected $fillable = [];

	public $rules = [
		'facebook' => 'required',
		'google_plus' => 'required',
		'twitter' => 'required',
		'email' => 'required',
		'skype' => 'required',
		'about_descriptions' => 'required',
		'education_titles' => 'required',
		'education_descriptions' => 'required',
		'education_start_end_dates' => 'required',
		'experience_titles' => 'required',
		'experience_worked_as' => 'required',
		'experience_start_end_dates' => 'required',
		'skills_percent_titles' => 'required',
		'skills_percents' => 'required',
		'skills_titles' => 'required',
		'skills_descriptions' => 'required',
		'portfolio_titles' => 'required',
		'portfolio_descriptions' => 'required'
	];

	public function user()
	{
	    return $this->belongsTo('User');
	}

}
