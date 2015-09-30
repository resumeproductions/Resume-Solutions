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
		$about->description = '#johnslife';
		$about->description = '1.jpg';


	
		$about->save();
	}

}