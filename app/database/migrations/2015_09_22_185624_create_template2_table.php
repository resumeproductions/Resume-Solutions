<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplate2Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('template2', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('adjectives');
			$table->string('about_picture');
			$table->string('about_title');
			$table->string('about_sub_title');
			$table->string('about_description');
			$table->string('service_titles');
			$table->string('service_descriptions');
			$table->string('overview');
			$table->string('work_start_date');
			$table->string('work_finish_date');
			$table->string('work_titles');
			$table->string('work_descriptions');
			$table->string('skill_titles');
			$table->string('skill_percents');
			$table->string('language_titles');
			$table->string('language_percents');
			$table->string('hobies');
			$table->string('portfolio_titles');
			$table->string('portfolio_pictures');
			$table->string('portfolio_links');
			$table->string('award_titles');
			$table->string('award_numbers');
			$table->string('conact_phone');
			$table->string('conact_adress');
			$table->string('conact_email');
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
		Schema::drop('template2');
	}

}
