<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkExperiencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_experiences', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('start_date');
			$table->string('end_date')->nullable();
			$table->string('title');
			$table->string('description');

			$table->integer('template_id')->unsigned();

			$table->foreign('template_id')->references('id')->on('templates');

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
		Schema::drop('work_experiences');
	}

}
