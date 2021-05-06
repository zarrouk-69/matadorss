<?php
	class badge
	{
		private int $iddon ;
		private int $idbad;
		private string $niveau;
        private string $logim;
        
		public function __construct($niveau,$logim)
		{
			$this->niveau =$niveau;
			$this->logim =$logim;
           
          
		}
		 public function getIddon () {
            return $this->iddon;
        }
         public function getIdbad () {
            return $this->idbad;
        }

        public function getNiveau (){
            return $this->niveau ;
        }

        public function getLogoim (){
            return $this->logim ;
        }
    
        

        public function setNiveau ($niveau){
            $this->niveau = $niveau;
        }

        public function setLogoim ($logim){
            $this->logim = $logim;
        }
      public function setIddon ($iddon){
            $this->iddon = $iddon;
        }



	}
?>