<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplate1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('template1', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
		    $table->foreign('user_id')->references('id')->on('users');
			$table->string('navbarTitle');

			$table->string('headerJobTitle');
			$table->string('headerDescription');

			$table->string('workExperienceYear');
			$table->string('workExperienceTitle');
			$table->string('workExperienceDescription');
			$table->string('workExperienceExtraText');

			$table->string('skillPercent');
			$table->string('skillTitle');

			$table->string('portfolioPicture');
			$table->string('portfolioDescription');

			$table->string('contactDescription');
			$table->string('contactLinkedin')->nullable();
			$table->string('contactFacebook')->nullable();
			$table->string('contactTwitter')->nullable();
			
			//Images
			$table->string('headerBackgroundImage')->nullable();
			$table->string('portfolioImage')->nullable();
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
		Schema::drop('template1');
	}

}
