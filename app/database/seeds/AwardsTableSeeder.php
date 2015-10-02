<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AwardsTableSeeder extends Seeder {

		public function run()
	{
		$this->envAward();

	}

	protected function envAward()
	{
		$award = new Award();
		$award->award_number = '22';
		$award->award_title = '#johnslife';
		$award->template_id = 1;
		$award->save();

		$award2 = new Award();
		$award2->award_number = '22';
		$award2->award_title = '#daveslife';
		$award2->template_id = 2;
		$award2->save();

		$award3 = new Award();
		$award3->award_number = '22';
		$award3->award_title = '#daveslife';
		$award3->template_id = 3;
		$award3->save();
	}
}