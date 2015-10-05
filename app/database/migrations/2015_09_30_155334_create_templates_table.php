<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('templates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('color');
			$table->enum('layout', ['layout1', 'layout2', 'layout3']);

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

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
		Schema::drop('templates');
	}

}
