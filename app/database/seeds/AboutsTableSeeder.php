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
		$about->first_name = $_ENV['about_FIRST_NAME'];
		$about->last_name = $_ENV['about_LAST_NAME'];
		$about->email = $_ENV['about_EMAIL'];
		$about->password = $_ENV['about_PASSWORD'];
		$about->zip = $_ENV['about_ZIP'];
		$about->address = $_ENV['about_ADDRESS'];
		$about->state = $_ENV['about_STATE'];
		$about->phone_number = $_ENV['about_PHONE_NUMBER'];
		$about->aboutname = $_ENV['about_aboutNAME'];
		$about->city = $_ENV['about_CITY'];
		$about->save();
	}

}