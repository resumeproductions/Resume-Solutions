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
			$table->string('navbarTitle');

			$table->string('headerJobTitle');
			$table->string('headerDescription');

			$table->string('workExperienceYear');
			$table->string('workExperienceTitle');
			$table->string('workExperienceDescription');
			$table->string('workExperienceExtraText');

			$table->decimal('skillPercent', 2);
			$table->string('skillTitle');

			$table->string('portfolioPicture');
			$table->string('portfolioDescription');

			$table->string('contactDesciption');
			$table->string('contactLinkedin')->nullable();
			$table->string('contactFacebook')->nullable();
			$table->string('contactTwitter')->nullable();
			
			//Colors
			$table->string('navbarColor');

			$table->string('headerNameColor');
			$table->string('headerDescriptionColor');
			$table->string('headerBackgroundImage');

			$table->string('portfolioImage');
			$table->string('portfolioDescriptionColor');

			$table->string('contactDesciptionColor');
			
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
