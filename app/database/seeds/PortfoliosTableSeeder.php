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
		$portfolio->description = 'This is my favorite park';
		$portfolio->template_id = 1;

		$portfolio->save();


		$portfolio2 = new Portfolio();
		$portfolio2->picture = 'img/uploaded/2.jpg';
		$portfolio2->title = 'My dog';
		$portfolio2->description = 'He is a cutie';
		$portfolio2->template_id = 2;
	
		$portfolio2->save();

		$portfolio21 = new Portfolio();
		$portfolio21->picture = 'img/uploaded/park.jpeg';
		$portfolio21->title = 'Best Park';
		$portfolio21->description = 'This is my favorite park';
		$portfolio21->template_id = 2;
	
		$portfolio21->save();

		$portfolio3 = new Portfolio();
		$portfolio3->picture = 'img/uploaded/2.jpg';
		$portfolio3->title = 'My Project';
		$portfolio3->description = 'Its pretty awesome';
		$portfolio3->template_id = 3;
	
		$portfolio3->save();

		$portfolio31 = new Portfolio();
		$portfolio31->picture = 'img/uploaded/park.jpeg';
		$portfolio31->title = 'My Project';
		$portfolio31->description = 'This is my favorite park';
		$portfolio31->template_id = 3;
	
		$portfolio31->save();
	}

}