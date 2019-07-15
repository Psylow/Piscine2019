<?php
class C3PO extends Robot
{
	protected $numeroDeSerie;
	private $nom;
	private $type;

	public function __construct($nom, $type = "droide de protocole", $numeroDeSerie)
        {
		$this->nom = $nom;
		$this->type = $type;
		$this->numeroDeSerie = $numeroDeSerie;
		echo "Je suis le droïde de protocole numéro " . $this->numeroDeSerie . ", enchanté de vous rencontrer !\n";
	}
	public function dire($str)
	{
		echo "C3PO no " . $this->numeroDeSerie . " : " . $str . "\n";
	}
	public function marcher()
	{
		echo "Je me mets en route, inutile d'insister.\n";
		Robot::marcher();
	}
	public function initierProtocole()
	{
		echo "En attente d'interaction utilisateur : \n";
	}
	public function __destruct()
	{
		$this->numeroDeSerie++;
	}
}
