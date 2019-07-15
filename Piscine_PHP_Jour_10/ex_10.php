<?php

class Pangolin
{
	public $friends = array();
	public $skills = Skill;

	public function __construc(array $friends, Skill $skills)
	{
		if(is_array($friends) | is_null($friends))
		{
			$this->friend = $friends;
		}
		if(is_a($skills, Skill)
		{
			$this->skills = $skills;
		}
	}

}
