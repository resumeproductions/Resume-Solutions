<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TemplatesTableSeeder extends Seeder {

public function run()
	{
		$this->envTemplate();

	}

	protected function envTemplate()
	{
		$template = new Template();
		$template->color = '1';
		$template->user_id = 1;
		$template->save();
	}

}