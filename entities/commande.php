<?php
	class commande 
	{
		private  $idPrec ;
		private  $qtePrec;
		private  $prixTotalprec;
        private  $datePrec;

		public function __construct($prixTotalprec,$qtePrec,$datePrec)
		{
			$this->qtePrec = $qtePrec;
			$this->prixTotalprec =$prixTotalprec;
            $this->datePrec =$datePrec;
		}
		 public function getidPrec () {
            return $this->idPrec;
        }

        public function getqtePrec (){
            return $this->qtePrec ;
        }

        public function getprixTotalprec (){
            return $this->prixTotalprec ;
        }

        public function getdatePrec (){
            return $this->datePrec ;
        }
       
        public function setqtePrec ($qtePrec){
            $this->qtePrec = $qtePrec;
        }

        public function setprixTotalprec ($prixTotalprec){
            $this->prixTotalprec = $prixTotalprec;
        }

        public function setdate ($datePrec){
            $this->datePrec = $datePrec;
        }
    }

?>