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
	public function doDamage($imperiumSpaceMarine)
	{
		while($i = 0 && $i < $attack)
		{
		$this->hp = $hp;
		$this->hp--;
		$i++;
		}
	}
	public function __toString()
	{
		echo $this->name . "Imperium Space Marine" . $this->hp . "HP.";
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
	public function doDamage($chaosSpaceMarine)
	{
		while($i = 0 && $i < $attack)
		{
		$this->hp--;
		$i++;
		}
	}
	public function __toString()
	{
		echo $this->name . "the Chaos Space Marine : " . $this->hp . "HP.";
	}
}

class Scanner
{
	static function scan($soldat)
	{
		if(is_a($soldat, "Imperium"))
		{
			echo "Praise be, Emperor, Lord.\n";
		}
		else
		{
			echo "Xenos spotted.\n";
		}
	}
}
?>
