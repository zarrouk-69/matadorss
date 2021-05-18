<?php
	class reserv 
	{
		private  $idreserv ;
		private  $prixreserv;
        private  $typereserv;
        private  $idh1 ;	
        private  $idc1 ;
        private  $nbrjourv ; 
        private  $accessv;   
        private  $nbrexcurv ;   
        private  $idhot1;  
        private  $datereserv;
		public function __construct($prixreserv,$typereserv,$idh1,$idc1,$nbrjourv,$accessv,$nbrexcurv,$idhot1,$datereserv)
		{

			$this->prixreserv = $prixreserv;
            $this->typereserv = $typereserv;
            $this->idh1 =$idh1;
            $this->idc1 =$idc1;
            $this->nbrjourv =$nbrjourv;
            $this->accessv =$accessv;
            $this->nbrexcurv =$nbrexcurv;
            $this->idhot1 =$idhot1;
            $this->datereserv =$datereserv;
		}
		 public function getidreserv () {
            return $this->idreserv;
        }
         public function getidhot1 () {
            return $this->idhot1;
        }
           public function getdatereserv () {
            return $this->datereserv;
        }
         public function getidreservh1 () {
            return $this->idh1;
        }
                 public function getidreservc1 () {
            return $this->idc1;
        }
   
    public function getnbrjourv (){
            return $this->nbrjourv ;
        }
    public function getaccessv (){
            return $this->accessv ;
        }
    public function getnbrexcurv (){
            return $this->nbrexcurv ;
        }

        public function gettypereserv (){
            return $this->typereserv ;
        }
        public function getprixreserv (){
            return $this->prixreserv ;
        }
             public function setidh1 ($idh1){
            $this->idh1 = $idh1;
        }
                 public function setidc1 ($idc1){
            $this->idc1 = $idc1;
        }
   
         public function settype ($typereserv){
            $this->typereserv = $typereserv;
        }
        public function setPrix ($prixreserv){
            $this->prixreserv = $prixreserv;
        }
     
              public function setnbrjour ($nbrjourv){
            $this->nbrjourv = $nbrjourv;
        }
              public function setaccess ($accessv){
            $this->accessv = $accessv;
        }
              public function setnbrexcur ($nbrexcurv){
            $this->nbrexcurv = $nbrexcurv;
        }
               public function setidhot1 ($idhot1){
            $this->idhot1 = $idhot1;
        }
               public function setdatereserv ($datereserv){
            $this->datereserv = $datereserv;
        }
	}
?>