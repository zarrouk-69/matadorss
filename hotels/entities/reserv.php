<?php
	class reserv 
	{
		private int $idreserv ;
		private int $prixreserv;
        private string $typereserv;
        private int $idh1 ;	
        private int $idc1 ;
        private int $nbrjourv ; 
        private string $accessv;   
        private int $nbrexcurv ;   
		public function __construct($prixreserv,$typereserv,$idh1,$idc1,$nbrjourv,$accessv,$nbrexcurv)
		{

			$this->prixreserv = $prixreserv;
            $this->typereserv = $typereserv;
            $this->idh1 =$idh1;
            $this->idc1 =$idc1;
            $this->nbrjourv =$nbrjourv;
            $this->accessv =$accessv;
            $this->nbrexcurv =$nbrexcurv;
		}
		 public function getidreserv () {
            return $this->idreserv;
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
	}
?>