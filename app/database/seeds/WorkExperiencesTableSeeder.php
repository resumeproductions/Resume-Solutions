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
	}

}