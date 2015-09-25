<?php

class TemplatesController extends \BaseController {

	/**
	 * Display a listing of templates
	 *
	 * @return Response
	 */
	public function index()
	{
		$templates = Template::all();

		return View::make('templates.index', compact('templates'));
	}

	/**
	 * Show the form for creating a new template
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('templates.create');
	}

	/**
	 * Store a newly created template in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Template::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Template::create($data);

		return Redirect::route('templates.index');
	}

	/**
	 * Display the specified template.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$template = Template::findOrFail($id);

		return View::make('templates.show', compact('template'));
	}

	/**
	 * Show the form for editing the specified template.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$template = Template::find($id);

		return View::make('templates.edit', compact('template'));
	}

	/**
	 * Update the specified template in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$template = Template::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Template::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$template->update($data);

		return Redirect::route('templates.index');
	}

	/**
	 * Remove the specified template from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Template::destroy($id);

		return Redirect::route('templates.index');
	}

	public function DPTemplate()
	{
		return View::make('templates.DP');
	}

	public function DPSTemplate()
	{
		return View::make('templates.DPS');
	}

	public function JCTemplate()
	{
		return View::make('templates.JC');
	}

	public function Something()
	{
		return View::make('templates.create_template');
	}

	public function storeTemplate1()
	{
		$template = new Template1();
		$template = Input::get('navbarTitle');
		$template = Input::get('headerJobTitle');
		$template = Input::get('headerDescription');
		$template = Input::get('workExperienceYear');
		$template = Input::get('workExperienceTitle');
		$template = Input::get('workExperienceDescription');
		$template = Input::get('workExperienceExtraText');
		$template = Input::get('skillPercent');
		$template = Input::get('skillTitle');
		$template = Input::get('portfolioPicture');
		$template = Input::get('portfolioDescription');
		$template = Input::get('contactDescription');
		if(Input::has('contactFacebook')) {
			$template = Input::get('contactFacebook');
		}
		if(Input::has('contactLinkedin')) {
			$template = Input::get('contactLinkedin');
		}
		if(Input::has('contactTwitter')) {
			$template = Input::get('contactTwitter');
		}
		if(Input::has('headerBackgroundImage')) {
			$template = Input::get('headerBackgroundImage');
		}

		$template->save();

	}

	public function storeTemplate2()
	{
		$template = new Template2();
		if(Input::has('about_picture')) {
			$template = Input::get('about_picture');
		}
		$template = Input::get('adjectives');
		$template = Input::get('about_title');
		$template = Input::get('about_sub_title');
		$template = Input::get('about_description');
		$template = Input::get('service_titles');
		$template = Input::get('sercive_percents');
		$template = Input::get('overview');
		$template = Input::get('work_start_date');
		$template = Input::get('work_finish_date');
		$template = Input::get('work_titles');
		$template = Input::get('work_descriptions');
		$template = Input::get('skill_titles');
		$template = Input::get('skill_percents');
		$template = Input::get('language_title');
		$template = Input::get('language_percents');
		$template = Input::get('hobbies');
		$template = Input::get('portfolio_titles');
		if(Input::has('portfolio_pictures')) {
			$template = Input::get('portfolio_pictures');
		}
		if(Input::has('portfolio_links')) {
			$template = Input::get('portfolio_links');
		}
		$template = Input::get('award_titles');
		$template = Input::get('award_numbers');
		$template->save();
	}

	public function storeTemplate3()
	{
		$template = new Template3();
		if(Input::has('facebook')) {
			$template = Input::get('facebook');
		}
		if(Input::has('google_plus')) {
		$template = Input::get('google_plus');
		}
		if(Input::has('twitter')) {
			$template = Input::get('twitter');
		}
		if(Input::has('email')) {
			$template = Input::get('email');
		}
		if(Input::has('skype')) {
			$template = Input::get('skype');
		}
		$template = Input::get('about_pictures');
		$template = Input::get('about_descriptions');
		$template = Input::get('education_titles');
		$template = Input::get('education_descriptions');
		$template = Input::get('education_start_end_dates');
		$template = Input::get('experience_titles');
		$template = Input::get('experience_pictures');
		$template = Input::get('experience_worked_as');
		$template = Input::get('experience_start_end_dates');
		$template = Input::get('skills_percent_titles');
		$template = Input::get('skills_percents');
		$template = Input::get('skills_titles');
		$template = Input::get('skills_descriptions');
		$template = Input::get('portfolio_titles');
		$template = Input::get('portfolio_descriptions');
		$template->save();
	}

	public function updateTemplate1($id) {
		$validator = Validator::make(Input::all(), Location::$rules);
		
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		} else {	
			$template = Input::get('navbarTitle');
			$template = Input::get('headerJobTitle');
			$template = Input::get('headerDescription');
			$template = Input::get('workExperienceYear');
			$template = Input::get('workExperienceTitle');
			$template = Input::get('workExperienceDescription');
			$template = Input::get('workExperienceExtraText');
			$template = Input::get('skillPercent');
			$template = Input::get('skillTitle');
			$template = Input::get('portfolioPicture');
			$template = Input::get('portfolioDescription');
			$template = Input::get('contactDescription');
			if(Input::has('contactFacebook')) {
				$template = Input::get('contactFacebook');
			}
			if(Input::has('contactLinkedin')) {
				$template = Input::get('contactLinkedin');
			}
			if(Input::has('contactTwitter')) {
				$template = Input::get('contactTwitter');
			}
			if(Input::has('headerBackgroundImage')) {
				$template = Input::get('headerBackgroundImage');
			}
			$template->save();
		}

		return View::make('/home')->with('template' , $template);
	}

	public function updateTemplate2($id) {
		$validator = Validator::make(Input::all(), Location::$rules);
		
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		} else {	
			$template = Input::get('adjectives');
			$template = Input::get('about_picture');
			$template = Input::get('about_title');
			$template = Input::get('about_sub_title');
			$template = Input::get('about_description');
			$template = Input::get('service_titles');
			$template = Input::get('service_descriptions');
			$template = Input::get('overview');
			$template = Input::get('work_start_date');
			$template = Input::get('work_finish_date');
			$template = Input::get('work_titles');
			$template = Input::get('work_descriptions');
			$template = Input::get('skill_titles');
			$template = Input::get('skill_percents');
			$template = Input::get('language_titles');
			$template = Input::get('language_percents');
			$template = Input::get('hobbies');
			$template = Input::get('portfolio_titles');
			$template = Input::get('portfolio_pictures');
			$template = Input::get('portfolio_links');
			$template = Input::get('award_titles');
			$template = Input::get('award_numbers');
			
			$template->save();
		}

		return View::make('/home')->with('template' , $template);
	}

	public function updateTemplate3($id) {
		$validator = Validator::make(Input::all(), Location::$rules);
		
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		} else {	
			$template = new Template3();
			if(Input::has('facebook')){
				$template = Input::get('facebook');
			}
			if(Input::has('google_plus')){
				$template = Input::get('google_plus');
			}
			if(Input::has('twitter')){
				$template = Input::get('twitter');
			}
			if(Input::has('skype')){
				$template = Input::get('skype');
			}
			$template = Input::get('about_pictures');
			$template = Input::get('about_descriptions');
			$template = Input::get('education_titles');
			$template = Input::get('education_descriptions');
			$template = Input::get('education_start_end_dates');
			$template = Input::get('experience_titles');
			$template = Input::get('experience_pictures');
			$template = Input::get('experience_worked_as');
			$template = Input::get('experience_start_end_dates');
			$template = Input::get('skills_percent_titles');
			$template = Input::get('skills_percents');
			$template = Input::get('skills_titles');
			$template = Input::get('skills_descriptions');
			$template = Input::get('portfolio_titles');
			$template = Input::get('portfolio_descriptions');	
			
			$template->save();
		}

		return View::make('/home')->with('template' , $template);
	}

}
