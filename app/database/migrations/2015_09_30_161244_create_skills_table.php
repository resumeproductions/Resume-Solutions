<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('skills', function(Blueprint $table)
		{
			$table->increments('id');;
			$table->integer('percent');
			$table->string('skill_title');
			$table->string('description_title');
			$table->string('description');

			$table->integer('template_id')->unsigned();
			$table->foreign('template_id')->refrences('id')->on('templates');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('skills');
	}

}
