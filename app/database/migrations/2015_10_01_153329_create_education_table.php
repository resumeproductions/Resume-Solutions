<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEducationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('education', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('start_date')->nullable();
			$table->string('end_date')->nullable();
			$table->string('title')->nullable();
			$table->string('description')->nullable();

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
		Schema::drop('education');
	}

}
