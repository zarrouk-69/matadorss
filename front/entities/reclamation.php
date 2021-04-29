<?php

class reclamation
{
	private  $idR ;
	private  $typeR;
	private  $dateR;
	private  $texteR;
	public function __construct($typeR,$dateR,$texteR)
	
	{
		
		$this->typeR=$typeR;
		$this->dateR=$dateR;
		$this->texteR=$texteR;
		
	}
		public function getid(){return $this->idR;}
	public function gettype(){return $this->typeR;}
	public function getdate(){return $this->dateR;}
	public function gettexte(){return $this->texteR;}
	public function settype($typeR){$this->typeR=$typeR;}
	public function settexte($texteR){$this->texteR=$texteR;}
	public function setdate($dateR){$this->dateR=$dateR;}
		
}
?>