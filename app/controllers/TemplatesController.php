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

	public function Something2()
	{
		return View::make('templates.DPS_create_template');
	}

	public function Something3()
	{
		return View::make('templates.JC_create_template');
	}

	public function storeTemplate1Images() 
	{
		$image = new Image();
		if(Input::has('portfolioPicture1')) {
			$image->portfolioPicture1 = $Pic1;
		}
		if(Input::has('portfolioPicture2')) {
			$image->portfolioPicture2 = $Pic2;
		}
		if(Input::has('portfolioPicture3')) {
			$image->portfolioPicture3 = $Pic3;
		}
		$image->save();
		return Redirect::action('HomeController@showWelcome');
	}

	public function storeTemplate1()
	{
		$template = new TemplateOne();
		$template->navbarTitle = Input::get('navbarTitle');
		$template->headerJobTitle = Input::get('headerJobTitle');
		$template->headerDescription = Input::get('headerDescription');
		$template->workExperienceExtraText = Input::get('workExperienceExtraText');
		$template->contactDescription = Input::get('contactDescription');
		
		if(Input::has('contactFacebook')) {
			$template->contactFacebook = Input::get('contactFacebook');
		}
		if(Input::has('contactLinkedin')) {
			$template->contactLinkedin = Input::get('contactLinkedin');
		}
		if(Input::has('contactTwitter')) {
			$template->contactTwitter = Input::get('contactTwitter');
		}
	
		if (Input::hasFile('headerBackgroundImage')) {
	 	       $template->headerBackgroundImage = Input::file('headerBackgroundImage')->move("images/uploaded/");
	 	}
		if(Input::has('workExperienceYear') && Input::has('workExperienceDescription') && Input::has('workExperienceTitle')) {
			$template->workExperienceYear = implode(',', Input::get('workExperienceYear'));
			$template->workExperienceTitle = implode(',', Input::get('workExperienceTitle'));
			$template->workExperienceDescription = implode(',', Input::get('workExperienceDescription'));
		}
		if(Input::has('skillPercent') && Input::has('skillTitle')) {
			$template->skillPercent = implode(',', Input::get('skillPercent'));
			$template->skillTitle = implode(',', Input::get('skillTitle'));
		}
		if(Input::has('portfolioDescription')) {
			$template->portfolioDescription = implode(',', Input::get('portfolioDescription'));
		}
		$template->user_id = Auth::id();

		// $portfolioPicture1 = Input::get('portfolioPicture1');
		// $portfolioPicture2 = Input::get('portfolioPicture2');
		// $portfolioPicture3 = Input::get('portfolioPicture3');

		$template->save();
		
		return Redirect::action('HomeController@showWelcome');
	}

	public function storeTemplate2()
	{
		$template = new Template2();
		if(Input::has('about_picture')) {
			$template = Input::get('about_picture');
		}
		$template->adjectives = Input::get('adjectives');
		$template->about_title = Input::get('about_title');
		$template->about_sub_title = Input::get('about_sub_title');
		$template->about_description = Input::get('about_description');
		$template->service_titles = Input::get('service_titles');
		$template->sercive_percents = Input::get('sercive_percents');
		$template->overview = Input::get('overview');
		$template->work_start_date = Input::get('work_start_date');
		$template->work_finish_date = Input::get('work_finish_date');
		$template->work_titles = Input::get('work_titles');
		$template->work_descriptions = Input::get('work_descriptions');
		$template->skill_titles = Input::get('skill_titles');
		$template->skill_percents = Input::get('skill_percents');
		$template->language_title = Input::get('language_title');
		$template->language_percents = Input::get('language_percents');
		$template->hobbies = Input::get('hobbies');
		$template->portfolio_titles = Input::get('portfolio_titles');
		if(Input::has('portfolio_pictures')) {
			$template->portfolio_pictures = Input::get('portfolio_pictures');
		}
		if(Input::has('portfolio_links')) {
			$template->portfolio_links = Input::get('portfolio_links');
		}
		$template->award_titles = Input::get('award_titles');
		$template->award_numbers = Input::get('award_numbers');
		$template->save();
	}

	public function storeTemplate3()
	{
		$template = new Template3();
		if(Input::has('facebook')) {
			$template->facebook = Input::get('facebook');
		}
		if(Input::has('google_plus')) {
		$template->google_plus = Input::get('google_plus');
		}
		if(Input::has('twitter')) {
			$template->twitter = Input::get('twitter');
		}
		if(Input::has('email')) {
			$template->email = Input::get('email');
		}
		if(Input::has('skype')) {
			$template->skype = Input::get('skype');
		}
		$template->about_pictures = Input::get('about_pictures');
		$template->about_descriptions = Input::get('about_descriptions');
		$template->education_titles = Input::get('education_titles');
		$template->education_descriptions = Input::get('education_descriptions');
		$template->education_start_end_dates = Input::get('education_start_end_dates');
		$template->experience_titles = Input::get('experience_titles');
		$template->experience_pictures = Input::get('experience_pictures');
		$template->experience_worked_as = Input::get('experience_worked_as');
		$template->experience_start_end_dates = Input::get('experience_start_end_dates');
		$template->skills_percent_titles = Input::get('skills_percent_titles');
		$template->skills_percents = Input::get('skills_percents');
		$template->skills_titles = Input::get('skills_titles');
		$template->skills_descriptions = Input::get('skills_descriptions');
		$template->portfolio_titles = Input::get('portfolio_titles');
		$template->portfolio_descriptions = Input::get('portfolio_descriptions');
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
