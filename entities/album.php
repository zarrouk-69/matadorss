<?php
	class sponsor 
	{
		private  $idS ;
		private  $nomS;
		private  $numtlph;
        private  $dateD;
        private  $dateF;
        private  $descr;
         private $logoS;
		public function __construct($nomS,$numtlph,$dateD,$dateF,$descr,$logoS)
		{
			$this->nomS =$nomS;
			$this->numtlph = $numtlph;
            $this->dateD =$dateD;
            $this->dateF =$dateF;
            $this->descr =$descr;
            $this->logoS =$logoS;

		}
		 public function getIdSpon () {
            return $this->idS;
        }

        public function getNomSpon (){
            return $this->nomS ;
        }

        public function getNumtel (){
            return $this->numtlph ;
        }

        public function getDateDebut (){
            return $this->dateD ;
        }
        public function getDateFin (){
            return $this->dateF ;
        }
        public function getDescription (){
            return $this->descr ;
        }
        public function getLogo (){
            return $this->logoS ;
        }

        public function setNomSpon ($nomS){
            $this->nomS = $nomS;
        }

        public function setNumtel ($numtlph){
            $this->numtlph = $numtlph;
        }

        public function setDateDebut ($dateD){
            $this->dateD = $dateD;
        }
        public function setDateFin ($dateF){
            $this->dateF = $dateF;
        }
        public function setDescription ($desc){
            $this->desc = $descr;
        }
        public function setLogo ($logoS){
            $this->logoS = $logoS;
        }
	}
?>