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
		} else 
		{
			$template = new Template();
			$template->color = Input::get('color');
			$template->user_id = Auth::id();
			$template->save();

			//Checking for up to 6 skill inputs to be accpeted
			if(Input::has('skillPercent1') && Input::has('skillTitle1')) {
				$skills = new Skill();
				$skills->template_id = $template->id;
				$skills->percent = Input::get('skillPercent1');
				$skills->skill_title = Input::get('skillTitle1');
				if(Input::has('skillDescription1') && Input::has('descriptionTitle1')) {
					$skills->description = Input::get('skillDescription1');
					$skills->description_title = Input::get('skillDescriptionTitle1');
				}
				$skills->save();
			}

			if(Input::has('skillPercent2') && Input::has('skillTitle2')) {
				$skills = new Skill();
				$skills->template_id = $template->id;
				$skills->percent = Input::get('skillPercent2');
				$skills->skill_title = Input::get('skillTitle2');
				if(Input::has('skillDescription2') && Input::has('descriptionTitle2')) {
					$skills->description = Input::get('skillDescription2');
					$skills->description_title = Input::get('skillDescriptionTitle2');
				}
				$skills->save();
			}

			if(Input::has('skillPercent3') && Input::has('skillTitle3')) {
				$skills = new Skill();
				$skills->template_id = $template->id;
				$skills->percent = Input::get('skillPercent3');
				$skills->skill_title = Input::get('skillTitle3');
				if(Input::has('skillDescription3') && Input::has('descriptionTitle3')) {
					$skills->description = Input::get('skillDescription3');
					$skills->description_title = Input::get('skillDescriptionTitle3');
				}
				$skills->save();
			}

			if(Input::has('skillPercent4') && Input::has('skillTitle4')) {
				$skills = new Skill();
				$skills->template_id = $template->id;
				$skills->percent = Input::get('skillPercent4');
				$skills->skill_title = Input::get('skillTitle4');
				if(Input::has('skillDescription4') && Input::has('descriptionTitle4')) {
					$skills->description = Input::get('skillDescription4');
					$skills->description_title = Input::get('skillDescriptionTitle4');
				}
				$skills->save();
			}

			if(Input::has('skillPercent5') && Input::has('skillTitle5')) {
				$skills = new Skill();
				$skills->template_id = $template->id;
				$skills->percent = Input::get('skillPercent5');
				$skills->skill_title = Input::get('skillTitle5');
				if(Input::has('skillDescription5') && Input::has('descriptionTitle5')) {
					$skills->description = Input::get('skillDescription5');
					$skills->description_title = Input::get('skillDescriptionTitle5');
				}
				$skills->save();
			}

			if(Input::has('aboutTitle') && Input::has('aboutDescription')) {
				$abouts = new About();
				$abouts->title = Input::get('aboutTitle');
				$abouts->description = Input::get('aboutDescription');
				if (Input::hasFile('aboutBackgroundImage')) {
			 	      $template->picture = Input::file('aboutBackgroundImage')->move("images/uploaded/");
			 	}
				$abouts->save();
			}

			if(Input::has('contactDescription')) {
				$contacts = new Contact();
				$contacts->contactDescription = Input::get('contactDescription');
				$contacts->save();
			}

			//There are the inputs for the portfolio storage
			if(Input::has('portfolioDescription1') && Input::has('portfolioPicture1') && Input::get('portfolioTitle1')) {
				$portfolios = new Portfolio();
				$portfolios->description = Input::get('portfolioDescription1');
				$portfolios->title = Input::get('portfolioTitle1');
				$portfolios->picture = Input::get('portfolioPicture1');
				$portfolios->save();
			}

			if(Input::has('portfolioDescription2') && Input::has('portfolioPicture2')&& Input::get('portfolioTitle2')) {
				$portfolios2 = new Portfolio();
				$portfolios->description2 = Input::get('portfolioDescription2');
				$portfolios2->title = Input::get('portfolioTitle2');
				$portfolios2->picture = Input::get('portfolioPicture2');
				$portfolios2->save();
			}

			if(Input::has('portfolioDescription3') && Input::has('portfolioPicture3')&& Input::get('portfolioTitle3')) {
				$portfolios3 = new Portfolio();
				$portfolios3->description = Input::get('portfolioDescription3');
				$portfolios3->title = Input::get('portfolioTitle3');
				$portfolios3->picture = Input::get('portfolioPicture3');
				$portfolios3->save();
			}
			if(Input::has('portfolioDescription4') && Input::has('portfolioPicture4')&& Input::get('portfolioTitle4')) {
				$portfolios4 = new Portfolio();
				$portfolios4->description = Input::get('portfolioDescription4');
				$portfolios4->title = Input::get('portfolioTitle4');
				$portfolios4->picture = Input::get('portfolioPicture4');
				$portfolios4->save();
			}
			if(Input::has('portfolioDescription5') && Input::has('portfolioPicture5')&& Input::get('portfolioTitle5')) {
				$portfolios5 = new Portfolio();
				$portfolios5->description = Input::get('portfolioDescription5');
				$portfolios5->title = Input::get('portfolioTitle5');
				$portfolios5->picture = Input::get('portfolioPicture5');
				$portfolios5->save();
			}
			if(Input::has('portfolioDescription6') && Input::has('portfolioPicture6')&& Input::get('portfolioTitle6')) {
				$portfolios6 = new Portfolio();
				$portfolios6->description = Input::get('portfolioDescription6');
				$portfolios6->title = Input::get('portfolioTitle6');
				$portfolios6->picture = Input::get('portfolioPicture6');
				$portfolios6->save();
			}

			if(Input::has('workExperienceStart1') && Input::has('workExperienceDescription1') && Input::has('workExperienceTitle1')) {
				$experience = new workExperience();
				if(Input::has('workExperienceExtraText1')) {
					$experience->description = Input::get('workExperienceExtraText1');
				}
				$experience->start_date = Input::get('workExperienceStart1');
				$experience->title = Input::get('workExperienceTitle1');
				$experience->workExperienceDescription = Input::get('workExperienceDescription1');

				if(Input::has('workExperienceEnd1')) {
					$experience->end_date = Input::get('workExperienceEnd1');
				}

				$experience->save();
			}

			if(Input::has('workExperienceStart2') && Input::has('workExperienceDescription2') && Input::has('workExperienceTitle2')) {
				$experience = new workExperience();
				if(Input::has('workExperienceExtraText2')) {
					$experience->description = Input::get('workExperienceExtraText2');
				}
				$experience->start_date = Input::get('workExperienceStart2');
				$experience->title = Input::get('workExperienceTitle2');
				$experience->workExperienceDescription = Input::get('workExperienceDescription2');

				if(Input::has('workExperienceEnd2')) {
					$experience->end_date = Input::get('workExperienceEnd2');
				}

				$experience->save();
			}

			if(Input::has('workExperienceStart3') && Input::has('workExperienceDescription3') && Input::has('workExperienceTitle3')) {
				$experience = new workExperience();
				if(Input::has('workExperienceExtraText3')) {
					$experience->description = Input::get('workExperienceExtraText3');
				}
				$experience->start_date = Input::get('workExperienceStart3');
				$experience->title = Input::get('workExperienceTitle3');
				$experience->workExperienceDescription = Input::get('workExperienceDescription3');

				if(Input::has('workExperienceEnd3')) {
					$experience->end_date = Input::get('workExperienceEnd3');
				}

				$experience->save();
			}

		} 

		return Redirect::action('HomeController@showWelcome');
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
		} else {
			$template = new Template();
			$template->color = Input::get('color');
			$template->user_id = Auth::id();
			$template->save();

			//Checking for up to 6 skill inputs to be accpeted
			if(Input::has('skillPercent1') && Input::has('skillTitle1')) {
				$skills = new Skill();
				$skills->template_id = $template->id;
				$skills->percent = Input::get('skillPercent1');
				$skills->skill_title = Input::get('skillTitle1');
				if(Input::has('skillDescription1') && Input::has('descriptionTitle1')) {
					$skills->description = Input::get('skillDescription1');
					$skills->description_title = Input::get('skillDescriptionTitle1');
				}
				$skills->save();
			}

			if(Input::has('skillPercent2') && Input::has('skillTitle2')) {
				$skills = new Skill();
				$skills->template_id = $template->id;
				$skills->percent = Input::get('skillPercent2');
				$skills->skill_title = Input::get('skillTitle2');
				if(Input::has('skillDescription2') && Input::has('descriptionTitle2')) {
					$skills->description = Input::get('skillDescription2');
					$skills->description_title = Input::get('skillDescriptionTitle2');
				}
				$skills->save();
			}

			if(Input::has('skillPercent3') && Input::has('skillTitle3')) {
				$skills = new Skill();
				$skills->template_id = $template->id;
				$skills->percent = Input::get('skillPercent3');
				$skills->skill_title = Input::get('skillTitle3');
				if(Input::has('skillDescription3') && Input::has('descriptionTitle3')) {
					$skills->description = Input::get('skillDescription3');
					$skills->description_title = Input::get('skillDescriptionTitle3');
				}
				$skills->save();
			}

			if(Input::has('skillPercent4') && Input::has('skillTitle4')) {
				$skills = new Skill();
				$skills->template_id = $template->id;
				$skills->percent = Input::get('skillPercent4');
				$skills->skill_title = Input::get('skillTitle4');
				if(Input::has('skillDescription4') && Input::has('descriptionTitle4')) {
					$skills->description = Input::get('skillDescription4');
					$skills->description_title = Input::get('skillDescriptionTitle4');
				}
				$skills->save();
			}

			if(Input::has('skillPercent5') && Input::has('skillTitle5')) {
				$skills = new Skill();
				$skills->template_id = $template->id;
				$skills->percent = Input::get('skillPercent5');
				$skills->skill_title = Input::get('skillTitle5');
				if(Input::has('skillDescription5') && Input::has('descriptionTitle5')) {
					$skills->description = Input::get('skillDescription5');
					$skills->description_title = Input::get('skillDescriptionTitle5');
				}
				$skills->save();
			}

			if(Input::has('aboutTitle') && Input::has('aboutDescription')) {
				$abouts = new About();
				$abouts->title = Input::get('aboutTitle');
				$abouts->description = Input::get('aboutDescription');
				if (Input::hasFile('aboutBackgroundImage')) {
			 	      $template->picture = Input::file('aboutBackgroundImage')->move("images/uploaded/");
			 	}
				$abouts->save();
			}

			if(Input::has('contactDescription')) {
				$contacts = new Contact();
				$contacts->contactDescription = Input::get('contactDescription');
				$contacts->save();
			}

			//There are the inputs for the portfolio storage
			if(Input::has('portfolioDescription1') && Input::has('portfolioPicture1') && Input::get('portfolioTitle1')) {
				$portfolios = new Portfolio();
				$portfolios->description = Input::get('portfolioDescription1');
				$portfolios->title = Input::get('portfolioTitle1');
				$portfolios->picture = Input::get('portfolioPicture1');
				$portfolios->save();
			}

			if(Input::has('portfolioDescription2') && Input::has('portfolioPicture2')&& Input::get('portfolioTitle2')) {
				$portfolios2 = new Portfolio();
				$portfolios->description2 = Input::get('portfolioDescription2');
				$portfolios2->title = Input::get('portfolioTitle2');
				$portfolios2->picture = Input::get('portfolioPicture2');
				$portfolios2->save();
			}

			if(Input::has('portfolioDescription3') && Input::has('portfolioPicture3')&& Input::get('portfolioTitle3')) {
				$portfolios3 = new Portfolio();
				$portfolios3->description = Input::get('portfolioDescription3');
				$portfolios3->title = Input::get('portfolioTitle3');
				$portfolios3->picture = Input::get('portfolioPicture3');
				$portfolios3->save();
			}
			if(Input::has('portfolioDescription4') && Input::has('portfolioPicture4')&& Input::get('portfolioTitle4')) {
				$portfolios4 = new Portfolio();
				$portfolios4->description = Input::get('portfolioDescription4');
				$portfolios4->title = Input::get('portfolioTitle4');
				$portfolios4->picture = Input::get('portfolioPicture4');
				$portfolios4->save();
			}
			if(Input::has('portfolioDescription5') && Input::has('portfolioPicture5')&& Input::get('portfolioTitle5')) {
				$portfolios5 = new Portfolio();
				$portfolios5->description = Input::get('portfolioDescription5');
				$portfolios5->title = Input::get('portfolioTitle5');
				$portfolios5->picture = Input::get('portfolioPicture5');
				$portfolios5->save();
			}
			if(Input::has('portfolioDescription6') && Input::has('portfolioPicture6')&& Input::get('portfolioTitle6')) {
				$portfolios6 = new Portfolio();
				$portfolios6->description = Input::get('portfolioDescription6');
				$portfolios6->title = Input::get('portfolioTitle6');
				$portfolios6->picture = Input::get('portfolioPicture6');
				$portfolios6->save();
			}

			if(Input::has('workExperienceStart1') && Input::has('workExperienceDescription1') && Input::has('workExperienceTitle1')) {
				$experience = new workExperience();
				if(Input::has('workExperienceExtraText1')) {
					$experience->description = Input::get('workExperienceExtraText1');
				}
				$experience->start_date = Input::get('workExperienceStart1');
				$experience->title = Input::get('workExperienceTitle1');
				$experience->workExperienceDescription = Input::get('workExperienceDescription1');

				if(Input::has('workExperienceEnd1')) {
					$experience->end_date = Input::get('workExperienceEnd1');
				}

				$experience->save();
			}

			if(Input::has('workExperienceStart2') && Input::has('workExperienceDescription2') && Input::has('workExperienceTitle2')) {
				$experience = new workExperience();
				if(Input::has('workExperienceExtraText2')) {
					$experience->description = Input::get('workExperienceExtraText2');
				}
				$experience->start_date = Input::get('workExperienceStart2');
				$experience->title = Input::get('workExperienceTitle2');
				$experience->workExperienceDescription = Input::get('workExperienceDescription2');

				if(Input::has('workExperienceEnd2')) {
					$experience->end_date = Input::get('workExperienceEnd2');
				}

				$experience->save();
			}

			if(Input::has('workExperienceStart3') && Input::has('workExperienceDescription3') && Input::has('workExperienceTitle3')) {
				$experience = new workExperience();
				if(Input::has('workExperienceExtraText3')) {
					$experience->description = Input::get('workExperienceExtraText3');
				}
				$experience->start_date = Input::get('workExperienceStart3');
				$experience->title = Input::get('workExperienceTitle3');
				$experience->workExperienceDescription = Input::get('workExperienceDescription3');

				if(Input::has('workExperienceEnd3')) {
					$experience->end_date = Input::get('workExperienceEnd3');
				}

				$experience->save();
			}
		}

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
		
	}

	public function storeTemplate2()
	{
		$skills = new Skill();
		$skills->skill_titles = Input::get('skill_titles');
		$skills->skill_percents = Input::get('skill_percents');
		$skills->hobbies = Input::get('hobbies');

		//need to create knowledge coulumn first
		// $skills->knowledge = Input::get('knowledge');
		$skill->save();

		
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
		$template->language_title = Input::get('language_title');
		$template->language_percents = Input::get('language_percents');
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
