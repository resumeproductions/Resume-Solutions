<?php

class WorkExperience extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
	protected $table = 'work_experiences';
	// Don't forget to fill this array
	protected $fillable = [];


	public function Template()
    {
    	return $this->belongsTo('Template');
    }

}