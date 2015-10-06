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
		$portfolio->picture = 'img/uploaded/2.jpg';
		$portfolio->title = 'My Project';
		$portfolio->description = 'This is my cute dog.';
		$portfolio->template_id = 1;
	
		$portfolio->save();

		$portfolio = new Portfolio();
		$portfolio->picture = 'img/uploaded/park.jpeg';
		$portfolio->title = 'My Project';
		$portfolio->description = 'This piece of work is my favorite';
		$portfolio->template_id = 1;
	
		$portfolio->save();


		$portfolio2 = new Portfolio();
		$portfolio2->picture = 'img/uploaded/2.jpg';
		$portfolio2->title = 'My Project';
		$portfolio2->description = 'Its pretty awesome';
		$portfolio2->template_id = 2;
	
		$portfolio2->save();

		$portfolio3 = new Portfolio();
		$portfolio3->picture = 'img/uploaded/2.jpg';
		$portfolio3->title = 'My Project';
		$portfolio3->description = 'Its pretty awesome';
		$portfolio3->template_id = 3;
	
		$portfolio3->save();
	}

}