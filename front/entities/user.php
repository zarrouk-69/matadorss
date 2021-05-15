<?php
class utilisateur{
	private $idU;
	private $nomU;
	private $prenomU;
	private $adresseU;
	private $roleU;
	private $mdpU;
	function __construct($nomU,$prenomU,$adresseU,$pseudo,$mdpU){
	
		$this->nomU=$nomU;
		$this->prenomU=$prenomU;
		$this->adresseU=$adresseU;
		$this->pseudo=$pseudo;
		
		$this->mdpU=$mdpU;
	}
	function getidU(){
		return $this->idU;
	}
	function getnomU(){
		return $this->nomU;
	}
	function getprenomU(){
		return $this->prenomU;
	}
	function getadresseU(){
		return $this->adresseU;
	}
	function getroleU(){
		return $this->roleU;
	}
	function getmdpU(){
		return $this->mdpU;
	}
	function getpseudo(){
		return $this->pseudo;
	}

	function setnom($nomU){
		$this->nomU=$nomU;
	}
	function setprenomU($prenomU){
		$this->prenomU=$prenomU;
	}
	function setadresseU($adresseU){
		$this->adresseU=$adresseU;
	}
	function setroleU($roleU){
		$this->roleU=$roleU;
	}
	function setmdp($mdpU){
		$this->mdpU=$mdpU;
	}

	
}


?>