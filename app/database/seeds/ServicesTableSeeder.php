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
		$service = new Service();
		$service->title = 'My Project ';
		$service->description = 'Its pretty awesome';
		$service->template_id = 1;
	
		$service->save();

		$service2 = new Service();
		$service2->title = 'My Project ';
		$service2->description = 'Its pretty awesome';
		$service2->template_id = 2;
	
		$service2->save();

		$service3 = new Service();
		$service3->title = 'My Project ';
		$service3->description = 'Its pretty awesome';
		$service3->template_id = 3;
	
		$service3->save();
	}

}