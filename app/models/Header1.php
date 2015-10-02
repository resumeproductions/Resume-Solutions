<?php

class Header1 extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	protected $table = 'headers';

	// Don't forget to fill this array
	protected $fillable = [];

	public function Template()
    {
    	return $this->belongsTo('Template');
    }
}