<?php
	class produit 
	{
		private int $idpr ;
		private string $nomPr;
		private int $prixPr;
		private string	$imagePr;
        private string $categoriePr;
		private int $qtestockPr;


		public function __construct($nomPr,$prixPr,$imagePr,$categoriePr,$qtestockPr)
		{
			$this->nomPr =$nomPr;
			$this->prixPr = $prixPr;
			$this->imagePr =$imagePr;
            $this->categoriePr =$categoriePr;
            $this->qtestockPr =$qtestockPr;

		}
		 public function getidpr () {
            return $this->idpr;
        }

        public function getnomPr (){
            return $this->nomPr ;
        }

        public function getimagePr (){
            return $this->imagePr ;
        }

        public function getprixPr (){
            return $this->prixPr ;
        }

        public function getcategoriePr (){
            return $this->categoriePr ;
        }

        public function getqtestockPr (){
            return $this->qtestockPr ;
        }

        public function setnomPr ($nomPr){
            $this->nomPr = $nomPr;
        }

        public function setimagePr ($imagePr){
            $this->imagePr = $imagePr;
        }

        public function setprixPr ($prixPr){
            $this->prixPr = $prixPr;
        }

        public function setcategoriePr ($categoriePr){
            $this->categoriePr = $categoriePr;
        }

        public function setqtestockPr ($qtestockPr){
            $this->qtestockPr = $qtestockPr;
        }
	}
?>