<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AboutsTableSeeder extends Seeder {

		public function run()
	{
		$this->envAbout();

	}

	protected function envAbout()
	{
		$about = new About();
		$about->description = 'My name is John Doe and this is a section where you will tell your potential employers about yourself. ';
		$about->title = '#johnslife';
		$about->picture = '1.jpg';
		$about->template_id = 1;
		$about->save();

		$about2 = new About();
		$about2->description = 'My name is John Doe and this is a section where you will tell your potential employers about yourself. ';
		$about2->title = '#daveslife';
		$about2->picture = '1.jpg';
		$about2->template_id = 2;
		$about2->save();

		$about3 = new About();
		$about3->description = 'My name is John Doe and this is a section where you will tell your potential employers about yourself. ';
		$about3->title = '#daveslife';
		$about3->picture = '1.jpg';
		$about3->template_id = 3;
		$about3->save();
	}

}