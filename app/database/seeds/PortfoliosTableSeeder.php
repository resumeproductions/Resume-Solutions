<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PortfoliosTableSeeder extends Seeder {

public function run()
	{
		$this->envPortfolio();

	}

	protected function envPortfolio()
	{
		$portfolio = new Portfolio();
		$portfolio->picture = '2.jpg ';
		$portfolio->title = 'My Project ';
		$portfolio->description = 'Its pretty awesome';
		$portfolio->template_id = 1;
	
		$portfolio->save();

		$portfolio2 = new Portfolio();
		$portfolio2->picture = '2.jpg ';
		$portfolio2->title = 'My Project ';
		$portfolio2->description = 'Its pretty awesome';
		$portfolio2->template_id = 2;
	
		$portfolio2->save();

		$portfolio3 = new Portfolio();
		$portfolio3->picture = '2.jpg ';
		$portfolio3->title = 'My Project ';
		$portfolio3->description = 'Its pretty awesome';
		$portfolio3->template_id = 3;
	
		$portfolio3->save();
	}

}