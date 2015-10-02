<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('users')->delete();

		$this->call('UsersTableSeeder');
		$this->call('TemplatesTableSeeder');
		$this->call('PortfoliosTableSeeder');
		$this->call('AboutsTableSeeder');
		$this->call('ContactsTableSeeder');
		$this->call('SkillsTableSeeder');
		$this->call('WorkExperiencesTableSeeder');
		$this->call('EducationTableSeeder');
		$this->call('AwardsTableSeeder');
		$this->call('HeadersTableSeeder');
		$this->call('ServicesTableSeeder');
		$this->call('KnowledgesTableSeeder');
	}

}
