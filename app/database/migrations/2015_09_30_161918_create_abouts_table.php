<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAboutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('abouts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('description');
			$table->string('title')->nullable();
			$table->string('picture')->nullable();


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
		Schema::drop('abouts');
	}

}
