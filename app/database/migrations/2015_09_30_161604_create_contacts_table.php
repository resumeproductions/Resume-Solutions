<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('description');

			$table->integer('template_id')->unsigned();
<<<<<<< HEAD
			$table->foreign('template_id')->references('id')->on('templates');
=======
			$table->foreign('template_id')->refrences('id')->on('templates');
>>>>>>> 1a5289beb8410411e691eab01115391e169b2656
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contacts');
	}

}
