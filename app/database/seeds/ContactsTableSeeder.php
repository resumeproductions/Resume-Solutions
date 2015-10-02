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

		$contact2 = new Contact();
		$contact2->description = 'Feel free to contact me with at the following available resources. ';
		$contact2->template_id = 2;
	
		$contact2->save();

		$contact3 = new Contact();
		$contact3->description = 'Feel free to contact me with at the following available resources. ';
		$contact3->template_id = 3;
	
		$contact3->save();
	}

}