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
		return View::make('templates.choose_template');
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
				$abouts->template_id = $template->id;
				$abouts->title = Input::get('aboutTitle');
				$abouts->description = Input::get('aboutDescription');
				if (Input::hasFile('aboutBackgroundImage')) {
			 	      $template->picture = Input::file('aboutBackgroundImage')->move("images/uploaded/");
			 	}
				$abouts->save();
			}

			if(Input::has('contactDescription')) {
				$contacts = new Contact();
				$contacts->template_id = $template->id;
				$contacts->description = Input::get('contactDescription');
				$contacts->save();
			}

			//There are the inputs for the portfolio storeTemplate1Images
			if(Input::has('portfolioDescription1')) {
				$portfolio = new Portfolio();
				if(Input::has('portfolioTitle1')) {
					$portfolio->title = Input::get('portfolioTitle1');
				}
				$portfolio->template_id = $template->id;
				$portfolio->description = Input::get('portfolioDescription1');
				if (Input::hasFile('portfolioPicture1')) {
	            	$portfolio->picture = Input::file('portfolioPicture1')->move("img/uploaded/");
	    		}
				$portfolio->save();
			}

			if(Input::has('portfolioDescription2')) {
				$portfolio = new Portfolio();
				if(Input::has('portfolioTitle2')) {
					$portfolio->title = Input::get('portfolioTitle2');
				}
				$portfolio->template_id = $template->id;
				$portfolio->description = Input::get('portfolioDescription2');
				if (Input::hasFile('portfolioPicture2')) {
	            	$portfolio->picture = Input::file('portfolioPicture2')->move("img/uploaded/");
	    		}
				$portfolio->save();
			}

			if(Input::has('portfolioDescription3')) {
				$portfolio = new Portfolio();
				if(Input::has('portfolioTitle3')) {
					$portfolio->title = Input::get('portfolioTitle3');
				}
				$portfolio->template_id = $template->id;
				$portfolio->description = Input::get('portfolioDescription3');
				if (Input::hasFile('portfolioPicture3')) {
	            	$portfolio->picture = Input::file('portfolioPicture3')->move("img/uploaded/");
	    		}
				$portfolio->save();
			}
			if(Input::has('portfolioDescription4')) {
				$portfolio = new Portfolio();
				if(Input::has('portfolioTitle4')) {
					$portfolio->title = Input::get('portfolioTitle4');
				}
				$portfolio->template_id = $template->id;
				$portfolio->description = Input::get('portfolioDescription4');
				if (Input::hasFile('portfolioPicture4')) {
	            	$portfolio->picture = Input::file('portfolioPicture4')->move("img/uploaded/");
	    		}
				$portfolio->save();
			}
			if(Input::has('portfolioDescription5')) {
				$portfolio = new Portfolio();
				if(Input::has('portfolioTitle5')) {
					$portfolio->title = Input::get('portfolioTitle5');
				}
				$portfolio->template_id = $template->id;
				$portfolio->description = Input::get('portfolioDescription5');
				if (Input::hasFile('portfolioPicture5')) {
	            	$portfolio->picture = Input::file('portfolioPicture5')->move("img/uploaded/");
	    		}
				$portfolio->save();
			}
			if(Input::has('portfolioDescription6')) {
				$portfolio = new Portfolio();
				if(Input::has('portfolioTitle6')) {
					$portfolio->title = Input::get('portfolioTitle6');
				}
				$portfolio->template_id = $template->id;
				$portfolio->description = Input::get('portfolioDescription6');
				if (Input::hasFile('portfolioPicture6')) {
	            	$portfolio->picture = Input::file('portfolioPicture6')->move("img/uploaded/");
	    		}
				$portfolio->save();
			}

			if(Input::has('workExperienceStart1') && Input::has('workExperienceDescription1') && Input::has('workExperienceTitle1')) {
				$experience = new workExperience();
				if(Input::has('workExperienceExtraText1')) {
					$experience->description = Input::get('workExperienceExtraText1');
				}
				$experience->template_id = $template->id;
				$experience->start_date = Input::get('workExperienceStart1');
				$experience->title = Input::get('workExperienceTitle1');
				$experience->description = Input::get('workExperienceDescription1');

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
				$experience->template_id = $template->id;
				$experience->start_date = Input::get('workExperienceStart2');
				$experience->title = Input::get('workExperienceTitle2');
				$experience->description = Input::get('workExperienceDescription2');

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
				$experience->template_id = $template->id;
				$experience->start_date = Input::get('workExperienceStart3');
				$experience->title = Input::get('workExperienceTitle3');
				$experience->description = Input::get('workExperienceDescription3');

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
				$skills->template_id = $template->id;
				$abouts->title = Input::get('aboutTitle');
				$abouts->description = Input::get('aboutDescription');
				if (Input::hasFile('aboutBackgroundImage')) {
			 	      $template->picture = Input::file('aboutBackgroundImage')->move("images/uploaded/");
			 	}
				$abouts->save();
			}

			if(Input::has('contactDescription')) {
				$contacts = new Contact();
				$contacts->template_id = $template->id;
				$contacts->description = Input::get('contactDescription');
				$contacts->save();
			}

			//There are the inputs for the portfolio storage
			if((Input::has('portfolioDescription1') && Input::has('portfolioPicture1')) && Input::get('portfolioTitle1')) {
				$portfolio = new Portfolio();
				$portfolio->template_id = $template->id;
				$portfolio->description = Input::get('portfolioDescription1');
				$portfolio->title = Input::get('portfolioTitle1');
				if (Input::hasFile('portfolioPicture1')) {
	            	$portfolio->picture = Input::file('portfolioPicture1')->move("img/uploaded/");
	    		}
				$portfolio->save();
			}

			if(Input::has('portfolioDescription2') && Input::has('portfolioPicture2')&& Input::get('portfolioTitle2')) {
				$portfolio = new Portfolio();
				$portfolio->template_id = $template->id;
				$portfolio->description = Input::get('portfolioDescription2');
				$portfolio->title = Input::get('portfolioTitle2');
				if (Input::hasFile('portfolioPicture2')) {
	            	$portfolio->picture = Input::file('portfolioPicture2')->move("img/uploaded/");
	    		}
				$portfolio->save();
			}

			if(Input::has('portfolioDescription3') && Input::has('portfolioPicture3')&& Input::get('portfolioTitle3')) {
				$portfolio = new Portfolio();
				$portfolio->template_id = $template->id;
				$portfolio->description = Input::get('portfolioDescription3');
				$portfolio->title = Input::get('portfolioTitle3');
				if (Input::hasFile('portfolioPicture3')) {
	            	$portfolio->picture = Input::file('portfolioPicture3')->move("img/uploaded/");
	    		}
				$portfolio->save();
			}
			if(Input::has('portfolioDescription4') && Input::has('portfolioPicture4')&& Input::get('portfolioTitle4')) {
				$portfolio = new Portfolio();
				$portfolio->template_id = $template->id;
				$portfolio->description = Input::get('portfolioDescription4');
				$portfolio->title = Input::get('portfolioTitle4');
				if (Input::hasFile('portfolioPicture4')) {
	            	$portfolio->picture = Input::file('portfolioPicture4')->move("img/uploaded/");
	    		}
				$portfolio->save();
			}
			if(Input::has('portfolioDescription5') && Input::has('portfolioPicture5')&& Input::get('portfolioTitle5')) {
				$portfolio = new Portfolio();
				$portfolio->template_id = $template->id;
				$portfolio->description = Input::get('portfolioDescription5');
				$portfolio->title = Input::get('portfolioTitle5');
				if (Input::hasFile('portfolioPicture5')) {
	            	$portfolio->picture = Input::file('portfolioPicture5')->move("img/uploaded/");
	    		}
				$portfolio->save();
			}
			if(Input::has('portfolioDescription6') && Input::has('portfolioPicture6')&& Input::get('portfolioTitle6')) {
				$portfolio = new Portfolio();
				$portfolio->template_id = $template->id;
				$portfolio->description = Input::get('portfolioDescription6');
				$portfolio->title = Input::get('portfolioTitle6');
				if (Input::hasFile('portfolioPicture6')) {
	            	$portfolio->picture = Input::file('portfolioPicture6')->move("img/uploaded/");
	    		}
				$portfolio->save();
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
		return View::make('templates.layout1');
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


}
