<?php
	class commande 
	{
		private  $idPrec ;
		private  $qtePrec;
		private  $prixTotalprec;
        private  $datePrec;
        private  $idc;

		public function __construct($prixTotalprec,$qtePrec,$datePrec,$idc)
		{
			$this->qtePrec = $qtePrec;
			$this->prixTotalprec =$prixTotalprec;
            $this->datePrec =$datePrec;
            $this->idc =$idc;
		}
		 public function getidPrec () {
            return $this->idPrec;
        }
        public function getidc () {
            return $this->idc;
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
        public function setidc ($idc){
            $this->idc = $idc;
        }


        public function setprixTotalprec ($prixTotalprec){
            $this->prixTotalprec = $prixTotalprec;
        }

        public function setdate ($datePrec){
            $this->datePrec = $datePrec;
        }
    }

?>