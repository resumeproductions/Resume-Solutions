<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplate3Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('template3', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('facebook')->nullable();
			$table->string('google_plus')->nullable();
			$table->string('twitter')->nullable();
			$table->string('email')->nullable();
			$table->string('skype')->nullable();
			$table->string('about_pictures');
			$table->string('about_descriptions');
			$table->string('education_titles');
			$table->string('education_descriptions');
			$table->string('education_start_end_dates');
			$table->string('experience_titles');
			$table->string('experience_pictures');
			$table->string('experience_worked_as');
			$table->string('experience_start_end_dates');
			$table->string('skills_percent_titles');
			$table->string('skills_percents');
			$table->string('skills_titles');
			$table->string('skills_descriptions');
			$table->string('portfolio_titles');
			$table->string('portfolio_descriptions');
			$table->string('address');
			$table->string('town');
			$table->string('state');
			$table->string('zip');
			$table->string('phone');	
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('template3');
	}

}
