<?php
	class event 
	{
		private  $ide ;
		private  $date_a;
		private  $date_f;
        private  $nbp;
        private  $ids;
        private  $state;
        private  $description;
        private  $img;
        private  $titre;
        


		public function __construct($date_a_n,$date_f_n,$nbp_n,$ids_n,$state_n,$description_n,$img_n,$titre_n)
		{
			
			$this->date_a =$date_a_n;
            $this->date_f =$date_f_n;
            $this->nbp = $nbp_n;
			$this->ids =$ids_n;
            $this->state =$state_n;
            $this->description = $description_n;
			$this->img =$img_n;
            $this->titre =$titre_n;
		}
		 public function getide() {
            return $this->ide;
        }

        public function getdate_a(){
            return $this->date_a ;
        }

        public function getdate_f(){
            return $this->prixTotalprec ;
        }

        public function getnbp(){
            return $this->datePrec ;
        }
        public function getids(){
            return $this->ids;
        }

        public function getstate(){
            return $this->state ;
        }

        public function getdescription(){
            return $this->description ;
        }

        public function getimg(){
            return $this->img ;
        }
        public function gettitre(){
            return $this->titre ;
        }
       
        

        public function setdatea ($date_a_){
            $this->date_a = $date_a_;
        }

        public function setdatef ($date_f_){
            $this->date_f = $date_f_;
        }
        public function setnbp ($nbp_){
            $this->nbp = $nbp_;
        }

        public function setprixTotalprec ($ids_){
            $this->ids = $ids_;
        }

        public function setdate ($state_){
            $this->state = $state_;
        }
        public function setdescription ($description_){
            $this->description = $description_;
        }

        public function setimg ($img_){
            $this->img = $img_;
        }

        public function settitre ($titre_){
            $this->titre = $titre_;
        }
    }

?>