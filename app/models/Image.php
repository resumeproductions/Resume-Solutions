<?php
use Esensi\Model\SoftModel;

class Image extends SoftModel 
{
	protected $table = 'template1_images';

	// Don't forget to fill this array
	protected $fillable = [];

	protected $rules = [
	];

	public function template1()
	{
	    return $this->belongsTo('Template1');
	}

}