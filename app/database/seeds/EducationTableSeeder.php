<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EducationTableSeeder extends Seeder {

	public function run()
	{
		$education = new Education();
		$education->description = "I worked as a fisher";
		$education->title = "Fisherman";
		$education->start_date = "June 6, 1990";
		$education->end_date = "May 7, 2000";
		$education->template_id = 1;
		$education->save();

		$education2 = new Education();
		$education2->description = "I worked as a fisher";
		$education2->title = "Fisherman";
		$education2->start_date = "June 6, 1990";
		$education2->end_date = "May 7, 2000";
		$education2->template_id = 1;
		$education2->save();

		$education3 = new Education();
		$education3->description = "I worked as a fisher";
		$education3->title = "Fisherman";
		$education3->start_date = "June 6, 1990";
		$education3->end_date = "May 7, 2000";
		$education3->template_id = 1;
		$education3->save();

		$education4 = new Education();
		$education4->description = "I worked as a fisher";
		$education4->title = "Fisherman";
		$education4->start_date = "June 6, 1990";
		$education4->end_date = "May 7, 2000";
		$education4->template_id = 1;
		$education4->save();
	}

}