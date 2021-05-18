<?php
	class hotel 
	{
		private  $idhotel ;
		private  $nomhotel;
		private  $prixhotel;
        private  $nbrhotel;
        private  $deschotel;
		private 	$imagehotel;	
        private  $imagehotel1;
        private   $imagehotel2;
        private   $imagehotel3;
        private   $imagehotel4;
		public function __construct($nomhotel,$prixhotel,$nbrhotel,$deschotel,$imagehotel,$imagehotel1,$imagehotel2,$imagehotel3,$imagehotel4)
		{
			$this->nomhotel =$nomhotel;
			$this->prixhotel = $prixhotel;
            $this->nbrhotel = $nbrhotel;
            $this->deschotel = $deschotel;
			$this->imagehotel =$imagehotel;
            $this->imagehotel1 =$imagehotel1;
            $this->imagehotel2 =$imagehotel2;
            $this->imagehotel3 =$imagehotel3;
            $this->imagehotel4 =$imagehotel4;
		}
		 public function getIdhotel () {
            return $this->idhotel;
        }

        public function getnomhotel (){
            return $this->nomhotel ;
        }

        public function getimagehotel (){
            return $this->imagehotel ;
        }
         public function getimagehotel1 (){
            return $this->imagehotel1 ;
        }
         public function getimagehotel2 (){
            return $this->imagehotel2 ;
        }
         public function getimagehotel3 (){
            return $this->imagehotel3 ;
        }
         public function getimagehotel4 (){
            return $this->imagehotel4 ;
        }
        public function getnbrhotel (){
            return $this->nbrhotel ;
        }
        public function getprixhotel (){
            return $this->prixhotel ;
        }
        public function getdeschotel (){
            return $this->deschotel ;
        }
        public function setTitre ($nomhotel){
            $this->nomhotel = $nomhotel;
        }

        public function setImage ($imagehotel){
            $this->imagehotel = $imagehotel;
        }
        public function setImage1 ($imagehotel1){
            $this->imagehotel1 = $imagehotel1;
        }
        public function setImage2 ($imagehotel2){
            $this->imagehotel2 = $imagehotel2;
        }
        public function setImage3 ($imagehotel3){
            $this->imagehotel3 = $imagehotel3;
        }
        public function setImage4 ($imagehotel4){
            $this->imagehotel4 = $imagehotel4;
        }
         public function setnbr ($nbrhotel){
            $this->nbrhotel = $nbrhotel;
        }
        public function setPrix ($prixhotel){
            $this->prixhotel = $prixhotel;
        }
        public function setdesc ($deschotel){
            $this->deschotel = $deschotel;
        }
	}
?>