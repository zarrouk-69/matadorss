<?php

class reclamation
{
	private  $idR ;
	private  $dateR;
	private  $texteR;
	private $type;
	public function __construct($dateR,$texteR,$type)
	
	{
		
		
		$this->dateR=$dateR;
		$this->texteR=$texteR;
		$this->type=$type;
		
	}
		public function getid(){return $this->idR;}
	public function getdate(){return $this->dateR;}
	public function gettexte(){return $this->texteR;}
	public function gettype(){return $this->type;}
	public function settexte($texteR){$this->texteR=$texteR;}
	public function setdate($dateR){$this->dateR=$dateR;}
	public function settype($type){$this->type=$type;}
		
}
?>