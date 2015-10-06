<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ServicesTableSeeder extends Seeder {

public function run()
	{
		$this->envService();

	}

	protected function envService()
	{
		$service2 = new Service();
		$service2->title = 'Caretaker';
		$service2->description = 'I helped take care of kids at our church on sundays.';
		$service2->template_id = 2;
	
		$service2->save();

		$service21 = new Service();
		$service21->title = 'Raise awareness';
		$service21->description = 'I helped rise awareness for cancer';
		$service21->template_id = 2;
	
		$service21->save();

		$service22 = new Service();
		$service22->title = 'Babysitting';
		$service22->description = "Every weekend i'd go over to my friends house to watch their kids.";
		$service22->template_id = 2;
	
		$service22->save();


		$service3 = new Service();
		$service3->title = 'My Project';
		$service3->description = 'Its pretty awesome';
		$service3->template_id = 3;
	
		$service3->save();
	}

}