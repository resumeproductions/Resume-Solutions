<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHeadersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('headers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('description')->nullable();
			$table->string('job_title')->nullable();
			$table->string('resume_title')->nullable();
			$table->string('adjective')->nullable();
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
		Schema::drop('headers');
	}

}
