<?php
	class pack 
	{
		private int $idpack ;
		private string $nompack;
		private int $prixpack;
        private string $typepack;
        private string $descpack;
		private string $imagepack;
        private int $idh1 ;	
        private int $nbrjour ; 
        private string $access;   
        private int $nbrexcur ;   
		public function __construct($nompack,$prixpack,$typepack,$descpack,$imagepack,$idh1,$nbrjour,$access,$nbrexcur)
		{
			$this->nompack =$nompack;
			$this->prixpack = $prixpack;
            $this->typepack = $typepack;
            $this->descpack = $descpack;
			$this->imagepack =$imagepack;
            $this->idh1 =$idh1;
             $this->nbrjour =$nbrjour;
              $this->access =$access;
               $this->nbrexcur =$nbrexcur;
		}
		 public function getidpack () {
            return $this->idpack;
        }
         public function getidpackh1 () {
            return $this->idh1;
        }
        public function getnompack (){
            return $this->nompack ;
        }
    public function getnbrjour (){
            return $this->nbrjour ;
        }
    public function getaccess (){
            return $this->access ;
        }
    public function getnbrexcur (){
            return $this->nbrexcur ;
        }


        public function getimagepack (){
            return $this->imagepack ;}
        public function gettypepack (){
            return $this->typepack ;
        }
        public function getprixpack (){
            return $this->prixpack ;
        }
        public function getdescpack (){
            return $this->descpack ;
        }
        public function setnom ($nompack){
            $this->nompack = $nompack;
        }
             public function setidh1 ($idh1){
            $this->idh1 = $idh1;
        }
        public function setImage ($imagepack){
            $this->imagepack = $imagepack;
        }
         public function settype ($typepack){
            $this->typepack = $typepack;
        }
        public function setPrix ($prixpack){
            $this->prixpack = $prixpack;
        }
        public function setdesc ($descpack){
            $this->descpack = $descpack;
        }
              public function setnbrjour ($nbrjour){
            $this->nbrjour = $nbrjour;
        }
              public function setaccess ($access){
            $this->access = $access;
        }
              public function setnbrexcur ($nbrexcur){
            $this->nbrexcur = $nbrexcur;
        }
	}
?>