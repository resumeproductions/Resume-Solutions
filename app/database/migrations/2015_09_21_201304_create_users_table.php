<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('username');
			$table->string('email');
			$table->string('password');
			$table->string('address');
			$table->string('zip');
			$table->string('city');
			$table->string('state');
			$table->string('phone_number')
			$table->string('facebook')->nullable();
			$table->string('linkedin')->nullable();
			$table->string('twitter')->nullable();
			$table->string('skype')->nullable();
			$table->string('google')->nullable();
			$table->timestamps(); 
			$table->rememberToken();
            $table->softdeletes();

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
