<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplate1ImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('template1_images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('template_id')->unsigned();
			$table->foreign('template_id')->references('id')->on('template1');
			$table->string('portfolioPicture1')->nullable();
			$table->string('portfolioPicture2')->nullable();
			$table->string('portfolioPicture3')->nullable();
			 $table->softdeletes();
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
		Schema::drop('template1_images');
	}

}
