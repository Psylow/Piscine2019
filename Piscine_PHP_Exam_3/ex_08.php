<?php

class hero extends personnage
{
	private $vie;
	private $force;
	private $magie;
	private $agilite;
	private $intelligence;
	const MY_HERO = "Pango";

	public function __construct($vie, $force, $magie, $agilite, $intelligence)
	{
		$this->vie = $vie;
		$this->force = $force;
		$this->magie = $magie;
		$this->agilité = $agilité;
		$this->intelligence = $intelligence;
	}
	public function getVie()
	{
		return $this->vie;
	}
	public function getForce()
	{
		return $this->force;
	}
	public function getMagie()
	{
		return $this->magie;
	}
	public function getAgilite()
	{
		return $this->agilité;
	}
	public function getIntelligence()
	{
		return $this->intelligence;
	}
}
