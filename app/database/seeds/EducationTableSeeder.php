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

		$education5 = new Education();
		$education5->description = "I worked as a fisher";
		$education5->title = "Fisherman";
		$education5->start_date = "June 6, 1990";
		$education5->end_date = "May 7, 2000";
		$education5->template_id = 2;
		$education5->save();

		$education6 = new Education();
		$education6->description = "I worked as a fisher";
		$education6->title = "Fisherman";
		$education6->start_date = "June 6, 1990";
		$education6->end_date = "May 7, 2000";
		$education6->template_id = 2;
		$education6->save();

		$education7 = new Education();
		$education7->description = "I worked as a fisher";
		$education7->title = "Fisherman";
		$education7->start_date = "June 6, 1990";
		$education7->end_date = "May 7, 2000";
		$education7->template_id = 2;
		$education7->save();

		$education8 = new Education();
		$education8->description = "I worked as a fisher";
		$education8->title = "Fisherman";
		$education8->start_date = "June 6, 1990";
		$education8->end_date = "May 7, 2000";
		$education8->template_id = 2;
		$education8->save();

		$education9 = new Education();
		$education9->description = "I worked as a fisher";
		$education9->title = "Fisherman";
		$education9->start_date = "June 6, 1990";
		$education9->end_date = "May 7, 2000";
		$education9->template_id = 3;
		$education9->save();

		$education10 = new Education();
		$education10->description = "I worked as a fisher";
		$education10->title = "Fisherman";
		$education10->start_date = "June 6, 1990";
		$education10->end_date = "May 7, 2000";
		$education10->template_id = 3;
		$education10->save();

		$education11 = new Education();
		$education11->description = "I worked as a fisher";
		$education11->title = "Fisherman";
		$education11->start_date = "June 6, 1990";
		$education11->end_date = "May 7, 2000";
		$education11->template_id = 3;
		$education11->save();

		$education12 = new Education();
		$education12->description = "I worked as a fisher";
		$education12->title = "Fisherman";
		$education12->start_date = "June 6, 1990";
		$education12->end_date = "May 7, 2000";
		$education12->template_id = 3;
		$education12->save();
	}

}