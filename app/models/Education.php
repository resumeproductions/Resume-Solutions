<?php

class Education extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

		public function Template()
    {
    	return $this->belongsTo('Template');
    }

}