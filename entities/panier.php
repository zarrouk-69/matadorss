<?php
	class panier 
	{
		private  $idprec ;
		private  $idpr;
		private  $qtepr;


		public function __construct($qtepr,$idpr)
		{
			$this->idpr = $idpr;
			$this->qtepr =$qtepr;

		}
		 public function getidpr () {
            return $this->idpr;
        }

        public function getidprec (){
            return $this->idprec ;
        }

        public function getqtepr (){
            return $this->qtepr ;
        }

        public function setidpr ($idpr){
            $this->idpr = $idpr;
        }

        public function setqtepr ($qtepr){
            $this->qtepr = $qtepr;
        }
    }

?>