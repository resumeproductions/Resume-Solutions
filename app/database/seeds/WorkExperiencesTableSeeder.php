<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class WorkExperiencesTableSeeder extends Seeder {

	public function run()
	{
		$experience = new workExperience();
		$experience->description = "I worked as a fisher";
		$experience->title = "Fisherman";
		$experience->start_date = "June 6, 1990";
		$experience->end_date = "May 7, 2000";
		$experience->template_id = 1;
		$experience->save();

		$experience2 = new workExperience();
		$experience2->description = "I worked as a fisher";
		$experience2->title = "Fisherman";
		$experience2->start_date = "June 6, 1990";
		$experience2->end_date = "May 7, 2000";
		$experience2->template_id = 1;
		$experience2->save();

		$experience3 = new workExperience();
		$experience3->description = "I worked as a fisher";
		$experience3->title = "Fisherman";
		$experience3->start_date = "June 6, 1990";
		$experience3->end_date = "May 7, 2000";
		$experience3->template_id = 1;
		$experience3->save();

		$experience4 = new workExperience();
		$experience4->description = "I worked as a fisher";
		$experience4->title = "Fisherman";
		$experience4->start_date = "June 6, 1990";
		$experience4->end_date = "May 7, 2000";
		$experience4->template_id = 1;
		$experience4->save();

		$experience5 = new workExperience();
		$experience5->description = "I worked as a fisher";
		$experience5->title = "Fisherman";
		$experience5->start_date = "June 6, 1990";
		$experience5->end_date = "May 7, 2000";
		$experience5->template_id = 2;
		$experience5->save();

		$experience6 = new workExperience();
		$experience6->description = "I worked as a fisher";
		$experience6->title = "Fisherman";
		$experience6->start_date = "June 6, 1990";
		$experience6->end_date = "May 7, 2000";
		$experience6->template_id = 2;
		$experience6->save();

		$experience7 = new workExperience();
		$experience7->description = "I worked as a fisher";
		$experience7->title = "Fisherman";
		$experience7->start_date = "June 6, 1990";
		$experience7->end_date = "May 7, 2000";
		$experience7->template_id = 2;
		$experience7->save();

		$experience8 = new workExperience();
		$experience8->description = "I worked as a fisher";
		$experience8->title = "Fisherman";
		$experience8->start_date = "June 6, 1990";
		$experience8->end_date = "May 7, 2000";
		$experience8->template_id = 2;
		$experience8->save();

		$experience9 = new workExperience();
		$experience9->description = "I worked as a fisher";
		$experience9->title = "Fisherman";
		$experience9->start_date = "June 6, 1990";
		$experience9->end_date = "May 7, 2000";
		$experience9->template_id = 3;
		$experience9->save();

		$experience10 = new workExperience();
		$experience10->description = "I worked as a fisher";
		$experience10->title = "Fisherman";
		$experience10->start_date = "June 6, 1990";
		$experience10->end_date = "May 7, 2000";
		$experience10->template_id = 3;
		$experience10->save();

		$experience11 = new workExperience();
		$experience11->description = "I worked as a fisher";
		$experience11->title = "Fisherman";
		$experience11->start_date = "June 6, 1990";
		$experience11->end_date = "May 7, 2000";
		$experience11->template_id = 3;
		$experience11->save();

		$experience12 = new workExperience();
		$experience12->description = "I worked as a fisher";
		$experience12->title = "Fisherman";
		$experience12->start_date = "June 6, 1990";
		$experience12->end_date = "May 7, 2000";
		$experience12->template_id = 3;
		$experience12->save();

		
	}

}