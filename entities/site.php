<?php
	class site 
	{
		
		private $numS;
		private $nomS;
		private $descS;
		private $imageS;	
		public function __construct($nomS,$descS,$imageS)
		{

			
			$this->nomS =$nomS;
			$this->descS = $descS;
			$this->imageS =$imageS;
		}
		 public function getNumS () {
            return $this->NumS;
        }

        public function getNomS (){
            return $this->nomS ;
        }

        public function getImageS (){
            return $this->imageS ;
        }
        public function getDescS (){
            return $this->descS ;
        }

        

        public function setNomS ($nomS){
            $this->nomS= $nomS;
        }

        public function setImage ($image){
            $this->imageS = $imageS;
        }
public function setAge ($descS){
            $this->descS= $descS;
        }

        
	}
?>