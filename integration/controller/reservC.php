<?php
    require_once '/xampp/htdocs/integration/config.php';
    class reservC {
        public function afficherreserv() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reserv '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
         public function afficherreservtri() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reserv ORDER BY idreserv '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherreservtritype() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reserv ORDER BY typereserv '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
       public function afficherreservtridesc() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reserv ORDER BY idreserv DESC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherreservtridesctype() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reserv ORDER BY typereserv DESC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
         public function afficherreservtriprix() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reserv ORDER BY prixreserv '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherreservtridescprix() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reserv ORDER BY prixreserv DESC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
      /* public function afficherreservnom($nomh) {
            try { 
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reserv  WHERE nomreserv like ("%":st"%")'
                );
                $query->execute(['st' => $nomh]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }*/
         public function afficherreservtype($tt) {
            try { 
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reserv  WHERE typereserv like ("%":rt"%")'
                );
                $query->execute(['rt' => $tt]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function getreservById($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reserv WHERE idreserv = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

       /* public function getreservByTitle($nomh) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reserv WHERE nomreserv = :nomh'
                );
                $query->execute([
                    'nomh' => $nomh
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }*/
        public function getreservBytype($type) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reserv WHERE typereserv = :type'
                );
                $query->execute([
                    'type' => $type
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
   public function getlast() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * 
                         FROM reserv 
                     ORDER BY idreserv DESC 
                        LIMIT 1'
                );
                $query->execute();
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function addreserv($reserv) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO reserv (prixreserv, typereserv, idh1, idc1, nbrjourv, accessv, nbrexcurv, idhot1, datereserv) 
                VALUES (:prix, :type, :idh1, :idc1, :nbrjourv, :accessv, :nbrexcurv, :idhot1, :datereserv)'
                );
                $query->execute([
                    'prix' => $reserv->getprixreserv(),
                    'type' => $reserv->gettypereserv(),
                     'idh1' => $reserv->getidreservh1(),
                     'idc1' => $reserv->getidreservc1(),
                     'nbrjourv' => $reserv->getnbrjourv(),
                     'accessv' => $reserv->getaccessv(),
                     'nbrexcurv' => $reserv->getnbrexcurv(),
                     'idhot1' => $reserv->getidhot1(),
                     'datereserv' => $reserv->getdatereserv()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updatereserv($reserv, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE reserv SET  datereserv = :datereserv WHERE idreserv = :id'
                );
                $query->execute([
                   
                     'datereserv' => $reserv->getdatereserv(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deletereserv($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM reserv WHERE idreserv = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function rechercherreserv($nomp) {            
            $sql = "SELECT * from reserv where nomreserv=:nomp"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'nomreserv' => $reserv->getnomreserv(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
        
    }
    ?>