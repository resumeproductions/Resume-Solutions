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
	
		$portfolio->save();
	}

}