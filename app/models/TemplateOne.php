<?php
use Esensi\Model\SoftModel;

class TemplateOne extends SoftModel 
{

	protected $table = 'template1';

	// Don't forget to fill this array
	protected $fillable = [];

	protected $rules = array(
		'navbarTitle' => 'required',
		'headerJobTitle' => 'required',
		'headerDescription' => 'required',
		'workExperienceYear' => 'required',
		'workExperienceTitle' => 'required',
		'workExperienceDescription' => 'required',
		'workExperienceExtraText' => 'required',
		'skillPercent' => 'required',
		'skillTitle' => 'required',
		'portfolioPicture' => 'required',
		'portfolioDescription' => 'required',
		'contactDescription' => 'required'
	);

	public function user()
	{
	    return $this->belongsTo('User');
	}
}
