<?php
	class animal 
	{
		
		private $idAnimal;
		private $nom;
		private $age;
		private $image;	
        private $site;
        private $descriptionA;
		public function __construct($nom,$age,$image,$site,$descriptionA)
		{

			
			$this->nom =$nom;
			$this->age = $age;
			$this->image =$image;
            $this->site =$site;
            $this->descriptionA =$descriptionA;
		}
		 public function getIdAnimal () {
            return $this->idAnimal;
        }

        public function getNom (){
            return $this->nom ;
        }

        public function getImage (){
            return $this->image ;
        }
        public function getAge (){
            return $this->age ;
        }
         public function getSite (){
            return $this->site ;
        }
          public function getDescriptionA (){
            return $this->descriptionA ;
        }

        public function setNom ($nom){
            $this->nom= $nom;
        }
        public function setSite ($site){
            $this->site= $site;
        }
        public function setImage ($image){
            $this->image = $image;
        }
public function setAge ($age){
            $this->age= $age;
        }

        public function setDescriptionA ($descriptionA){
            $this->descriptionA= $descriptionA;
        }
	}
?>