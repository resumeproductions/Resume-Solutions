<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ContactsTableSeeder extends Seeder {

public function run()
	{
		$this->envContact();

	}

	protected function envContact()
	{
		$contact = new Contact();
		$contact->description = 'Feel free to contact me with at the following available resources. ';
		$contact->template_id = 1;
	
		$contact->save();
	}

}