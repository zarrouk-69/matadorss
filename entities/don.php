<?php
	class don
	{
		private  $iddon ;
		private  $montantdon;
		private  $naturedon;
        private  $dateD;
        
		public function __construct($montantdon,$naturedon,$dateD)
		{
			$this->montantdon =$montantdon;
			$this->naturedon =$naturedon;
           $this->dateD =$dateD;
		}
		 public function getIddon () {
            return $this->iddon;
        }

        public function getMontant (){
            return $this->montantdon ;
        }

        public function getNature (){
            return $this->naturedon ;
        }
        public function getDateD (){
            return $this->dateD ;
        }
        

        public function setMontant ($montantdon){
            $this->montantdon = $montantdon;
        }

        public function setNature ($naturedon){
            $this->naturedon = $naturedon;
        }
        public function setDateD ($dateD){
            $this->dateD = $dateD;
        }


	}
?>