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
	
		$skill->save();
	}

}