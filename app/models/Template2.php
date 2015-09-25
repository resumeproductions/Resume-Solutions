<?php
use Esensi\Model\SoftModel;

class Template2 extends SoftModel 
{

	protected $table = 'template2';

	// Don't forget to fill this array
	protected $fillable = [];

	protected $rules = [
		'adjectives' => 'required',
		'about_title' => 'required',
		'about_sub_title' => 'required',
		'about_description' => 'required',
		'service_titles' => 'required',
		'service_descriptions' => 'required',
		'overview' => 'required',
		'work_start_date' => 'required',
		'work_finish_date' => 'required',
		'work_titles' => 'required',
		'work_descriptions' => 'required',
		'skill_titles' => 'required',
		'skill_percents' => 'required',
		'language_titles' => 'required',
		'language_percents' => 'required',
		'hobbies' => 'required',
		'portfolio_titles' => 'required',
		'portfolio_links' => 'required',
		'award_titles' => 'required',
		'award_numbers' => 'required'
	];

	public function user()
	{
	    return $this->belongsTo('User');
	}
}