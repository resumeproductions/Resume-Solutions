<?php
use Esensi\Model\SoftModel;

class TemplateOne extends SoftModel 
{

	protected $table = 'templates';

	// Don't forget to fill this array
	protected $fillable = [];

	protected $rules = array(
		'color' => 'required'
	);

	public function user()
	{
	    return $this->belongsTo('User');
	}
}
