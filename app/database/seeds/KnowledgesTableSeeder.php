<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class KnowledgesTableSeeder extends Seeder {
		
		public function run()
	{
		$this->envKnowledge();

	}

	protected function envKnowledge()
	{
		$knowledge = new Knowledge();
		$knowledge->knowledge_item = 'My name is John Doe and this is a section where you will tell your potential employers about yourself. ';
		$knowledge->sub_title = '#johnslife';
		$knowledge->sub_percent = '#johnslife';
		$knowledge->sub_head = 'resume title';
		$knowledge->sub_foot = 'resume title';
		$knowledge->template_id = 1;
		$knowledge->save();



		$knowledge2 = new Knowledge();
		$knowledge2->knowledge_item = 'My name is John Doe and this is a section where you will tell your potential employers about yourself. ';
		$knowledge2->sub_title = '#daveslife';
		$knowledge2->sub_percent = '#johnslife';
		$knowledge2->sub_head = 'resume title';
		$knowledge2->sub_foot = 'resume title';
		$knowledge2->template_id = 2;
		$knowledge2->save();

		$knowledge3 = new Knowledge();
		$knowledge3->knowledge_item = 'My name is John Doe and this is a section where you will tell your potential employers about yourself. ';
		$knowledge3->sub_title = '#daveslife';
		$knowledge3->sub_percent = '#johnslife';
		$knowledge3->sub_head = 'resume title';
		$knowledge3->sub_foot = 'resume title';
		$knowledge3->template_id = 3;
		$knowledge3->save();
	}

}