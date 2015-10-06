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


	public function chooseTemplate()
	{
		return View::make('templates.choose_template');
	}


	/**
	 * Show the form for creating a new template
	 *
	 * @return Response
	 */
	public function create()
	{
		if (!Input::has('layout')) {
			return Redirect::action('TemplatesController@chooseTemplate');
		}

		$layout = Input::get('layout');

		return View::make('templates.create.' . $layout);
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
			$template->layout = Input::get('templateID');
			$template->user_id = Auth::id();
			$template->save();

			//Storing header info
			if(Input::has('headerJobTitle')) {
				$header = new Header1();
				$header->job_title = Input::get('headerJobTitle');
				$header->template_id = $template->id;
				if(Input::has('headerResumeTitle')) {
					$header->description = Input::get('headerResumeTitle');
				}
				if (Input::hasFile('headerImage')) { 
			 	      $header->picture = Input::file('headerImage')->move("images/uploaded/");
			 	}
				if(Input::has('headerJobTitle')) {
					$header->description = Input::get('headerJobTitle');
				}
				$header->save();
			}

			//Storing adjectives for template 2
		
			if(Input::has('adjectives1')) {
				$header1 = new Header1();
				$header1->template_id = $template->id;
				$header1->adjective = Input::get('adjectives1');
				$header1->save();					
			}
			if(Input::has('adjectives2')) {
				$header2 = new Header1();
				$header2->template_id = $template->id;
				$header2->adjective = Input::get('adjectives2');
				$header2->save();					
			}
			if(Input::has('adjectives3')) {
				$header3 = new Header1();
				$header3->template_id = $template->id;
				$header3->adjective = Input::get('adjectives3');
				$header3->save();					
			}
			

			//Checking for up to 6 skill inputs to be accpeted
			if(Input::has('skillPercent1') && Input::has('skillTitle1')) {
				$skill1 = new Skill();
				$skill1->template_id = $template->id;
				$skill1->percent = Input::get('skillPercent1');
				$skill1->skill_title = Input::get('skillTitle1');
				if(Input::has('skillDescription1')) {
					$skill1->description = Input::get('skillDescription1');
				}
				if(Input::has('skillDescriptionTitle1')) {
					$skill1->description_title = Input::get('skillDescriptionTitle1');
				}
				if(Input::has('hobbies1')) {
					$skill1->description_title = Input::get('hobbies1');
				}
				$skill1->save();
			}

			if(Input::has('skillPercent2') && Input::has('skillTitle2')) {
				$skill2 = new Skill();
				$skill2->template_id = $template->id;
				$skill2->percent = Input::get('skillPercent2');
				$skill2->skill_title = Input::get('skillTitle2');
				if(Input::has('skillDescription2')) {
					$skill2->description = Input::get('skillDescription2');
				}
				if(Input::has('skillDescriptionTitle2')) {
					$skill2->description_title = Input::get('skillDescriptionTitle2');
				}
				if(Input::has('hobbies2')) {
					$skill2->description_title = Input::get('hobbies2');
				}
				$skill2->save();
			}

			if(Input::has('skillPercent3') && Input::has('skillTitle3')) {
				$skill3 = new Skill();
				$skill3->template_id = $template->id;
				$skill3->percent = Input::get('skillPercent3');
				$skill3->skill_title = Input::get('skillTitle3');
				if(Input::has('skillDescription3')) {
					$skill3->description = Input::get('skillDescription3');
				}
				if(Input::has('skillDescriptionTitle3')) {
					$skill3->description_title = Input::get('skillDescriptionTitle3');
				}
				if(Input::has('hobbies3')) {
					$skill3->description_title = Input::get('hobbies3');
				}
				$skill3->save();
			}

			if(Input::has('skillPercent4') && Input::has('skillTitle4')) {
				$skill4 = new Skill();
				$skill4->template_id = $template->id;
				$skill4->percent = Input::get('skillPercent4');
				$skill4->skill_title = Input::get('skillTitle4');
				if(Input::has('skillDescription4') && Input::has('descriptionTitle4')) {
					$skill4->description = Input::get('skillDescription4');
				}
				if(Input::has('skillDescriptionTitle4')) {
					$skill4->description_title = Input::get('skillDescriptionTitle4');
				}
				$skill4->save();
			}

			if(Input::has('skillPercent5') && Input::has('skillTitle5')) {
				$skill5 = new Skill();
				$skill5->template_id = $template->id;
				$skill5->percent = Input::get('skillPercent5');
				$skill5->skill_title = Input::get('skillTitle5');
				if(Input::has('skillDescription5')) {
					$skill5->description = Input::get('skillDescription5');
				}
				if(Input::has('skillDescriptionTitle5')) {
					$skill5->description_title = Input::get('skillDescriptionTitle5');
				}
				$skill5->save();
			}

			//Knowledge storage starts here for template 2

			if(Input::has('knowledge1') && Input::has('miscHead1') && Input::has('miscFoot1') && Input::has('miscPercent1')) {
				$knowledge1 = new Knowledge();
				$knowledge1->template_id = $template->id;
				$knowledge1->knowledge_item = Input::get('knowledge1');
				$knowledge1->sub_percent = Input::get('miscPercent1');
				$knowledge1->sub_head = Input::get('miscHead1');
				$knowledge1->sub_foot = Input::get('miscFoot1');
				if(Input::has('miscTitle1')) {
					$knowledge1->sub_title = Input::get('miscTitle1');
				}
				$knowledge1->save();
			}
			if(Input::has('knowledge2') && Input::has('miscHead2') && Input::has('miscFoot2') && Input::has('miscPercent2')) {
				$knowledge2 = new Knowledge();
				$knowledge2->template_id = $template->id;
				$knowledge2->knowledge_item = Input::get('knowledge2');
				$knowledge2->sub_percent = Input::get('miscPercent2');
				$knowledge2->sub_head = Input::get('miscHead2');
				$knowledge2->sub_foot = Input::get('miscFoot2');
				$knowledge2->save();
			}
			if(Input::has('knowledge3') && Input::has('miscHead3') && Input::has('miscFoot3') && Input::has('miscPercent3')) {
				$knowledge3 = new Knowledge();
				$knowledge3->template_id = $template->id;
				$knowledge3->knowledge_item = Input::get('knowledge3');
				$knowledge3->sub_percent = Input::get('miscPercent3');
				$knowledge3->sub_head = Input::get('miscHead3');
				$knowledge3->sub_foot = Input::get('miscFoot3');
				$knowledge3->save();
			}
			if(Input::has('knowledge4') && Input::has('miscHead4') && Input::has('miscFoot4') && Input::has('miscPercent4')) {
				$knowledge4 = new Knowledge();
				$knowledge4->template_id = $template->id;
				$knowledge4->knowledge_item = Input::get('knowledge4');
				$knowledge4->sub_percent = Input::get('miscPercent4');
				$knowledge4->sub_head = Input::get('miscHead4');
				$knowledge4->sub_foot = Input::get('miscFoot4');
				$knowledge4->save();
			}

			if(Input::has('aboutDescription1')) {
				$abouts1 = new About();
				$abouts1->template_id = $template->id;
				$abouts1->description = Input::get('aboutDescription1');
				if(Input::has('aboutTitle')) {
					$abouts1->title = Input::get('aboutTitle');
				}
				if (Input::hasFile('aboutBackgroundImage1')) {
			 	      $abouts1->picture = Input::file('aboutBackgroundImage1')->move("images/uploaded/");
			 	}
				$abouts1->save();
			}

			if(Input::has('aboutDescription2')) {
				$abouts2 = new About();
				$abouts2->template_id = $template->id;
				$abouts2->description = Input::get('aboutDescription2');
				if(Input::has('aboutTitle')) {
					$abouts2->title = Input::get('aboutTitle');
				}
				if (Input::hasFile('aboutBackgroundImage2')) {
			 	      $abouts2->picture = Input::file('aboutBackgroundImage2')->move("images/uploaded/");
			 	}
				$abouts2->save();
			}

			if(Input::has('aboutDescription3')) {
				$abouts3 = new About();
				$abouts3->template_id = $template->id;
				$abouts3->description = Input::get('aboutDescription3');
				if(Input::has('aboutTitle')) {
					$abouts3->title = Input::get('aboutTitle');
				}
				if (Input::hasFile('aboutBackgroundImage3')) {
			 	      $abouts3->picture = Input::file('aboutBackgroundImage3')->move("images/uploaded/");
			 	}
				$abouts3->save();
			}

			if(Input::has('contactDescription')) {
				$contacts = new Contact();
				$contacts->template_id = $template->id;
				$contacts->description = Input::get('contactDescription');
				$contacts->save();
			}


			//Storing services currently for template 2
			if(Input::has('serviceTitle1') || Input::has('serviceTitle2') || Input::has('serviceTitle3') || Input::has('serviceTitle4') || Input::has('serviceTitle5') || Input::has('serviceTitle6')) {
				if(Input::has('serviceTitle1') && Input::has('serviceDescription1')) {
					$service1 = new Service();
					$service1->template_id = $template->id;
					$service1->title = Input::get('serviceTitle1');
					$service1->description = Input::get('serviceDescription1');
					$service1->save();
				}
				if(Input::has('serviceTitle2') && Input::has('serviceDescription2')) {
					$service2 = new Service();
					$service2->template_id = $template->id;
					$service2->title = Input::get('serviceTitle2');
					$service2->description = Input::get('serviceDescription2');
					$service2->save();
				}
				if(Input::has('serviceTitle3') && Input::has('serviceDescription3')) {
					$service3 = new Service();
					$service3->template_id = $template->id;
					$service3->title = Input::get('serviceTitle3');
					$service3->description = Input::get('serviceDescription3');
					$service3->save();
				}
				if(Input::has('serviceTitle4') && Input::has('serviceDescription4')) {
					$service4 = new Service();
					$service4->template_id = $template->id;
					$service4->title = Input::get('serviceTitle4');
					$service4->description = Input::get('serviceDescription4');
					$service4->save();
				}
				if(Input::has('serviceTitle5') && Input::has('serviceDescription5')) {
					$service5 = new Service();
					$service5->template_id = $template->id;
					$service5->title = Input::get('serviceTitle5');
					$service5->description = Input::get('serviceDescription5');
					$service5->save();
				}
				if(Input::has('serviceTitle6') && Input::has('serviceDescription6')) {
					$service6 = new Service();
					$service6->template_id = $template->id;
					$service6->title = Input::get('serviceTitle6');
					$service6->description = Input::get('serviceDescription6');
					$service6->save();
				}
			}

			//There are the inputs for the portfolio storeTemplate1Images
			if(Input::has('portfolioDescription1')) {
				$portfolio1 = new Portfolio();
				if(Input::has('portfolioTitle1')) {
					$portfolio1->title = Input::get('portfolioTitle1');
				}
				$portfolio1->template_id = $template->id;
				$portfolio1->description = Input::get('portfolioDescription1');
				if (Input::hasFile('portfolioPicture1')) {
	            	$portfolio1->picture = Input::file('portfolioPicture1')->move("img/uploaded/");
	    		}
	    		if (Input::has('portfolioLink1')) {
	            	$portfolio1->link = Input::get('portfolioLink1');
	    		}
	    		if (Input::has('portfolioCategory1')) {
	            	$portfolio1->category = Input::get('portfolioCategory1');
	    		}
				$portfolio1->save();
			}

			if(Input::has('portfolioDescription2')) {
				$portfolio2 = new Portfolio();
				if(Input::has('portfolioTitle2')) {
					$portfolio2->title = Input::get('portfolioTitle2');
				}
				$portfolio2->template_id = $template->id;
				$portfolio2->description = Input::get('portfolioDescription2');
				if (Input::hasFile('portfolioPicture2')) {
	            	$portfolio2->picture = Input::file('portfolioPicture2')->move("img/uploaded/");
	    		}
	    		if (Input::has('portfolioLink2')) {
	            	$portfolio2->link = Input::get('portfolioLink2');
	    		}
	    		if (Input::has('portfolioCategory2')) {
	            	$portfolio2->category = Input::get('portfolioCategory2');
	    		}
				$portfolio2->save();
			}

			if(Input::has('portfolioDescription3')) {
				$portfolio3 = new Portfolio();
				if(Input::has('portfolioTitle3')) {
					$portfolio3->title = Input::get('portfolioTitle3');
				}
				$portfolio3->template_id = $template->id;
				$portfolio3->description = Input::get('portfolioDescription3');
				if (Input::hasFile('portfolioPicture3')) {
	            	$portfolio3->picture = Input::file('portfolioPicture3')->move("img/uploaded/");
	    		}
	    		if (Input::has('portfolioLink3')) {
	            	$portfolio3->link = Input::get('portfolioLink3');
	    		}
	    		if (Input::has('portfolioCategory3')) {
	            	$portfolio3->category = Input::get('portfolioCategory3');
	    		}
				$portfolio3->save();
			}
			if(Input::has('portfolioDescription4')) {
				$portfolio4 = new Portfolio();
				if(Input::has('portfolioTitle4')) {
					$portfolio4->title = Input::get('portfolioTitle4');
				}
				$portfolio4->template_id = $template->id;
				$portfolio4->description = Input::get('portfolioDescription4');
				if (Input::hasFile('portfolioPicture4')) {
	            	$portfolio4->picture = Input::file('portfolioPicture4')->move("img/uploaded/");
	    		}
	    		if (Input::has('portfolioLink4')) {
	            	$portfolio4->link = Input::get('portfolioLink4');
	    		}
	    		if (Input::has('portfolioCategory4')) {
	            	$portfolio4->category = Input::get('portfolioCategory4');
	    		}
				$portfolio4->save();
			}
			if(Input::has('portfolioDescription5')) {
				$portfolio5 = new Portfolio();
				if(Input::has('portfolioTitle5')) {
					$portfolio5->title = Input::get('portfolioTitle5');
				}
				$portfolio5->template_id = $template->id;
				$portfolio5->description = Input::get('portfolioDescription5');
				if (Input::hasFile('portfolioPicture5')) {
	            	$portfolio5->picture = Input::file('portfolioPicture5')->move("img/uploaded/");
	    		}
	    		if (Input::has('portfolioLink5')) {
	            	$portfolio5->link = Input::get('portfolioLink5');
	    		}
	    		if (Input::has('portfolioCategory5')) {
	            	$portfolio5->category = Input::get('portfolioCategory5');
	    		}
				$portfolio5->save();
			}
			if(Input::has('portfolioDescription6')) {
				$portfolio6 = new Portfolio();
				if(Input::has('portfolioTitle6')) {
					$portfolio6->title = Input::get('portfolioTitle6');
				}
				$portfolio6->template_id = $template->id;
				$portfolio6->description = Input::get('portfolioDescription6');
				if (Input::hasFile('portfolioPicture6')) {
	            	$portfolio6->picture = Input::file('portfolioPicture6')->move("img/uploaded/");
	    		}
	    		if (Input::hasFile('portfolioLink6')) {
	            	$portfolio6->link = Input::get('portfolioLink6');
	    		}
	    		if (Input::hasFile('portfolioCategory6')) {
	            	$portfolio6->category = Input::get('portfolioCategory6');
	    		}
				$portfolio6->save();
			}

			//Awards 

			if(Input::has('awardTitle1') && Input::has('awardNumber1')) {
				$award1 = new Award();
				$award1->template_id = $template->id;
				$award1->award_number = Input::get('awardTitle1');
				$award1->award_title = Input::get('awardNumber1');
				$award1->save();
			}

			if(Input::has('awardTitle2') && Input::has('awardNumber2')) {
				$award2 = new Award();
				$award2->template_id = $template->id;
				$award2->award_number = Input::get('awardTitle2');
				$award2->award_title = Input::get('awardNumber2');
				$award2->save();
			}

			if(Input::has('awardTitle3') && Input::has('awardNumber3')) {
				$award3 = new Award();
				$award3->template_id = $template->id;
				$award3->award_number = Input::get('awardTitle3');
				$award3->award_title = Input::get('awardNumber3');
				$award3->save();
			}

			//Storing up to 6 work experience sections
			if(Input::has('workExperienceStart1') && Input::has('workExperienceDescription1') && Input::has('workExperienceTitle1')) {
				$experience1 = new workExperience();
				if(Input::has('workExperienceExtraText1')) {
					$experience1->description = Input::get('workExperienceExtraText1');
				}
				$experience1->template_id = $template->id;
				$experience1->start_date = Input::get('workExperienceStart1');
				$experience1->title = Input::get('workExperienceTitle1');
				$experience1->description = Input::get('workExperienceDescription1');

				if(Input::has('workExperienceEnd1')) {
					$experience1->end_date = Input::get('workExperienceEnd1');
				}

				$experience1->save();
			}

			if(Input::has('workExperienceStart2') && Input::has('workExperienceDescription2') && Input::has('workExperienceTitle2')) {
				$experience2 = new workExperience();
				$experience2->template_id = $template->id;
				$experience2->start_date = Input::get('workExperienceStart2');
				$experience2->title = Input::get('workExperienceTitle2');
				$experience2->description = Input::get('workExperienceDescription2');

				if(Input::has('workExperienceEnd2')) {
					$experience2->end_date = Input::get('workExperienceEnd2');
				}

				$experience2->save();
			}

			if(Input::has('workExperienceStart3') && Input::has('workExperienceDescription3') && Input::has('workExperienceTitle3')) {
				$experience3 = new workExperience();
				$experience3->template_id = $template->id;
				$experience3->start_date = Input::get('workExperienceStart3');
				$experience3->title = Input::get('workExperienceTitle3');
				$experience3->description = Input::get('workExperienceDescription3');

				if(Input::has('workExperienceEnd3')) {
					$experience3->end_date = Input::get('workExperienceEnd3');
				}

				$experience3->save();
			}

			if(Input::has('workExperienceStart4') && Input::has('workExperienceDescription4') && Input::has('workExperienceTitle4')) {
				$experience4 = new workExperience();
				$experience4->template_id = $template->id;
				$experience4->start_date = Input::get('workExperienceStart4');
				$experience4->title = Input::get('workExperienceTitle4');
				$experience4->description = Input::get('workExperienceDescription4');

				if(Input::has('workExperienceEnd4')) {
					$experience4->end_date = Input::get('workExperienceEnd4');
				}

				$experience4->save();
			}

			if(Input::has('workExperienceStart5') && Input::has('workExperienceDescription5') && Input::has('workExperienceTitle5')) {
				$experience5 = new workExperience();
				$experience5->template_id = $template->id;
				$experience5->start_date = Input::get('workExperienceStart5');
				$experience5->title = Input::get('workExperienceTitle5');
				$experience5->description = Input::get('workExperienceDescription5');

				if(Input::has('workExperienceEnd5')) {
					$experience5->end_date = Input::get('workExperienceEnd5');
				}

				$experience5->save();
			}

			if(Input::has('workExperienceStart6') && Input::has('workExperienceDescription6') && Input::has('workExperienceTitle6')) {
				$experience6 = new workExperience();
				$experience6->template_id = $template->id;
				$experience6->start_date = Input::get('workExperienceStart6');
				$experience6->title = Input::get('workExperienceTitle6');
				$experience6->description = Input::get('workExperienceDescription6');

				if(Input::has('workExperienceEnd6')) {
					$experience6->end_date = Input::get('workExperienceEnd6');
				}

				$experience6->save();
			}

			if(Input::has('educationStart1') && Input::has('educationDescription1') && Input::has('educationTitle1')) {
				$education1 = new Education();
				$education1->template_id = $template->id;
				$education1->start_date = Input::get('educationStart1');
				if(Input::has('educationEnd1')) {
					$education1->end_date = Input::get('educationEnd1');
				}
				$education1->title = Input::get('educationTitle1');
				$education1->description = Input::get('educationDescription1'); 
				$education1->save();
			}

			if(Input::has('educationStart2') && Input::has('educationDescription2') && Input::has('educationTitle2')) {
				$education2 = new Education();
				$education2->template_id = $template->id;
				$education2->start_date = Input::get('educationStart2');
				if(Input::has('educationEnd2')) {
					$education2->end_date = Input::get('educationEnd2');
				}
				$education2->title = Input::get('educationTitle2');
				$education2->description = Input::get('educationDescription2'); 
				$education2->save();
			}

			if(Input::has('educationStart3') && Input::has('educationDescription3') && Input::has('educationTitle3')) {
				$education3 = new Education();
				$education3->template_id = $template->id;
				$education3->start_date = Input::get('educationStart3');
				if(Input::has('educationEnd3')) {
					$education3->end_date = Input::get('educationEnd3');
				}
				$education3->title = Input::get('educationTitle3');
				$education3->description = Input::get('educationDescription3'); 
				$education3->save();
			}

			if(Input::has('educationStart4') && Input::has('educationDescription4') && Input::has('educationTitle4')) {
				$education4 = new Education();
				$education4->template_id = $template->id;
				$education4->start_date = Input::get('educationStart4');
				if(Input::has('educationEnd4')) {
					$education4->end_date = Input::get('educationEnd4');
				}
				$education4->title = Input::get('educationTitle4');
				$education4->description = Input::get('educationDescription4'); 
				$education4->save();
			}
		} 
		return Redirect::action('UsersController@getProfile');
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
}
