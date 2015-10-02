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
		$template->layout = '1';
		$template->user_id = 1;
		$template->save();

		$template2 = new Template();
		$template2->color = '1';
		$template2->layout = '1';
		$template2->user_id = 2;
		$template2->save();

		$template3 = new Template();
		$template3->color = '1';
		$template3->layout = '1';
		$template3->user_id = 3;
		$template3->save();
	}

}