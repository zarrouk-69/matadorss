<?php
	class produit 
	{
		private int $idpr ;
		private string $nom;
		private int $prix;
		private string	$image;
        private string $categorie;
		private int $qtestock;


		public function __construct($nom,$prix,$image,$categorie,$qtestock)
		{
			$this->nom =$nom;
			$this->prix = $prix;
			$this->image =$image;
            $this->categorie =$categorie;
            $this->qtestock =$qtestock;

		}
		 public function getidpr () {
            return $this->idpr;
        }

        public function getnom (){
            return $this->nom ;
        }

        public function getImage (){
            return $this->image ;
        }

        public function getPrix (){
            return $this->prix ;
        }

        public function getcategorie (){
            return $this->categorie ;
        }

        public function getqtestock (){
            return $this->qtestock ;
        }

        public function setnom ($nom){
            $this->nom = $nom;
        }

        public function setImage ($image){
            $this->image = $image;
        }

        public function setPrix ($prix){
            $this->prix = $prix;
        }

        public function setcategorie ($categorie){
            $this->categorie = $categorie;
        }

        public function setqtestock ($qtestock){
            $this->qtestock = $qtestock;
        }
	}
?>