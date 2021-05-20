<?php
	class type{
		private $idType;
		private $libelleT;
		function __construct($libelleT){
			//$this->idType = $idType;
			$this->libelleT = $libelleT;
		}
		function getidType(){
			return $this->idType;
		}
		function getlibelleT(){
			return $this->libelleT;
		}
		function setidType($idType){
			$this->idType = $idType;
		}
		function setlibelleT($libelleT){
			$this->libelleT = $libelleT;
		}
	}
?>