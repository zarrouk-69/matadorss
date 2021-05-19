<?php
	class ticket 
	{
		private  $idt ;
		private  $ide;
		private  $datea;
        private  $idu;
        private  $state;

		public function __construct($ide_,$datea_,$idu_,$state_)
		{
			
			$this->ide =$ide_;
            $this->datea =$datea_;
            $this->idu = $idu_;
			$this->state =$state_;
            
		}
		 public function getide () {
            return $this->ide;
        }

        public function getdatea (){
            return $this->datea ;
        }
        public function getidu (){
            return $this->idu ;
        }

        public function getstate (){
            return $this->state ;
        }

        public function getidt (){
            return $this->idt ;
        }
       
        public function setide ($ide_){
            $this->ide = $ide_;
        }

        public function setdatea ($datea_){
            $this->datea = $datea_;
        }
        public function setdatea ($idu_){
            $this->idu = $idu_;
        }

        public function setstate ($state_){
            $this->state = $state_;
        }
    }

?>