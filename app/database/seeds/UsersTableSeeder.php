<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$this->envUser();

	}

	protected function envUser()
	{
		$user = new User();
		$user->first_name = $_ENV['USER_FIRST_NAME'];
		$user->last_name = $_ENV['USER_LAST_NAME'];
		$user->email = $_ENV['USER_EMAIL'];
		$user->password = $_ENV['USER_PASSWORD'];
		$user->zip = $_ENV['USER_ZIP'];
		$user->address = $_ENV['USER_ADDRESS'];
		$user->state = $_ENV['USER_STATE'];
		$user->phone_number = $_ENV['USER_PHONE_NUMBER'];
		$user->save();
	}

}