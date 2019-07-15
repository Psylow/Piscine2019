<?php
namespace Imperium;
class Soldier
{
	private $hp;
	private $attack;
	private $name;

	public function __construct($name, $hp = 50, $attack = 12)
	{
		$this->hp = $hp;
		$this->attack = $attack;
		$this->name = $name;
	}
	public function setHp($hp)
	{
		$this->hp = $hp;
	}
	public function getHp()
	{
		return $this->hp;
	}
	public function setAttack($attack)
	{
		$this->attack = $attack;
	}
	public function getAttack()
	{
		return $this->attack;
	}
	public function setName($name)
	{
		$this->name = $name;
	}
	public function getName()
	{
		return $this->name;
	}
	public function doDamage($object)
	{
		while($i = 0 && $i < $attack)
		{
			$this->hp--;
			$i++;
		}
	}
	public function __toString()
	{
		return $this->name . " Imperium Space Marine : " . $this->hp . "HP.";
	}
}
namespace Chaos;
class Soldier
{
	private  $hp;
	private  $attack;
	private  $name;

	public function __construct($name, $hp = 70, $attack = 12)
	{
		$this->hp = $hp;
		$this->attack = $attack;
		$this->name = $name;
	}
	public function setHp()
	{
		$this->hp = $hp;
	}
	public function getHp()
	{
		return $this->hp;
	}
	public function setAttack()
	{
		$this->attack = $attack;
	}
	public function getAttack()
	{
		return $this->attack;
	}
	public function setName($name)
	{
		$this->name = $name;
	}
	public function getName()
	{
		return $this->name;
	}
	public function doDamage($object)
	{
		while($i = 0 && $i < $attack)
		{
		$this->hp--;
		$i++;
		}
	}
	public function __toString()
	{
		return $this->name . " the Chaos Space Marine : " . $this->hp . "HP.";
	}
}
?>
