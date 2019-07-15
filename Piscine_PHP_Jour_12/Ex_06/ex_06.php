<?php

class Character
{
	private $name;
	private $strength;
	private $magic;
	private $intelligence;
	private $life;

	public function __construct($name = Character $i, $strength = 0, $magic = 0, $intelligence = 0, $life = 100)
	{
		$this->name = $name;
		$this->strength = $strength;
		$this->magic = $magic;
		$this->inteligence = $intelligence;
		$this->life = $life;
	}
	public function getName($name)
	{
		return $this->name;
	}
	public function getStrength($strength)
	{
		return $this->strength;
	}
	public function getMagic($magic)
	{
		return $this->magic;
	}
	public function getIntelligence($intelligence)
	{
		return $this->intelligence;
	}
	public function getLife($life)
	{
		return $this->life;
	}
	public function __toString()
	{
		echo "My name is" . $name . ".\n";
	}
	foreach ([new Character, new Character ($name), new Character] as $character)
	{
		echo $character;
	}
}
