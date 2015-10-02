<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SkillsTableSeeder extends Seeder {

public function run()
	{
		$this->envSkills();

	}

	protected function envSkills()
	{
		$skill = new Skill();
		$skill->skill_title = 'PHP ';
		$skill->percent = '20';
		$skill->description_title = 'My Skills';
		$skill->description= 'Are Sweet';
		$skill->template_id = 1;
	
		$skill->save();

		$skill2 = new Skill();
		$skill2->skill_title = 'PHP ';
		$skill2->percent = '20';
		$skill2->description_title = 'My Skills';
		$skill2->description= 'Are Sweet';
		$skill2->template_id = 2;
	
		$skill2->save();

		$skill3 = new Skill();
		$skill3->skill_title = 'PHP ';
		$skill3->percent = '20';
		$skill3->description_title = 'My Skills';
		$skill3->description= 'Are Sweet';
		$skill3->template_id = 3;
	
		$skill3->save();
	}

}