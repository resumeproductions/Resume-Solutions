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
		$user->username = $_ENV['USER_USERNAME'];
		$user->city = $_ENV['USER_CITY'];
		$user->save();

		$user2 = new User();
		$user2->first_name = 'Dave';
		$user2->last_name = 'Simonelli';
		$user2->email = 'simonelli@gmail.com';
		$user2->password = 'password';
		$user2->zip = '78227';
		$user2->address = '3787 Perrin Central Blvd';
		$user2->state = 'Texas';
		$user2->phone_number = '210-865-1155';
		$user2->username = 'simonelli';
		$user2->city = 'San Antonio';
		$user2->save();

		$user3 = new User();
		$user3->first_name = 'Dylan';
		$user3->last_name = 'Perenchio';
		$user3->email = 'dylanperenchio@gmail.com';
		$user3->password = 'password';
		$user3->zip = '78227';
		$user3->address = '3787 Perrin Central Blvd';
		$user3->state = 'Texas';
		$user3->phone_number = '210-865-1155';
		$user3->username = 'dylanp';
		$user3->city = 'San Antonio';
		$user3->save();
	}

}