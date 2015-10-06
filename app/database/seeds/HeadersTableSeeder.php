<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class HeadersTableSeeder extends Seeder {

		public function run()
	{
		$this->envHeader();

	}

	protected function envHeader()
	{
		$header = new Header1();
		$header->description = 'My name is Dylan Perenchio.';
		$header->job_title = '#johnslife';
		$header->adjective = '#johnslife';
		$header->resume_title = 'resume title';
		$header->template_id = 1;
		$header->save();

		$header2 = new Header1();
		$header2->description = 'My name is John Doe and this is a section where you will tell your potential employers about yourself. ';
		$header2->job_title = '#daveslife';
		$header->adjective = '#johnslife';
		$header2->resume_title = 'resume title';
		$header2->template_id = 2;
		$header2->save();

		$header3 = new Header1();
		$header3->description = 'My name is John Doe and this is a section where you will tell your potential employers about yourself. ';
		$header3->job_title = '#daveslife';
		$header->adjective = '#johnslife';
		$header3->resume_title = 'resume title';
		$header3->template_id = 3;
		$header3->save();
	}

}