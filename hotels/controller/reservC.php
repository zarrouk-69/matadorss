<?php
    require_once '/xampp/htdocs/hotels/config.php';
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
        /* public function afficherreservtri() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reserv ORDER BY nomreserv '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }*/
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
      /*  public function afficherreservtridesc() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reserv ORDER BY nomreserv DESC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }*/
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

        public function addreserv($reserv) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO reserv (prixreserv, typereserv, idh1, idc1, nbrjourv, accessv, nbrexcurv) 
                VALUES (:prix, :type, :idh1, :idc1, :nbrjourv, :accessv, :nbrexcurv)'
                );
                $query->execute([
                    'prix' => $reserv->getprixreserv(),
                    'type' => $reserv->gettypereserv(),
                     'idh1' => $reserv->getidreservh1(),
                     'idc1' => $reserv->getidreservc1(),
                     'nbrjourv' => $reserv->getnbrjourv(),
                     'accessv' => $reserv->getaccessv(),
                     'nbrexcurv' => $reserv->getnbrexcurv()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updatereserv($reserv, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE reserv SET prixreserv = :prix, typereserv = :type, idh1 = :idh1, idc1 = :idc1, nbrjourv = :nbrjourv, accessv = :accessv, nbrexcurv = :nbrexcurv WHERE idreserv = :id'
                );
                $query->execute([
                    'prix' => $reserv->getprixreserv(),
                    'type' => $reserv->gettypereserv(),
                    'idh1' => $reserv->getidreservh1(),
                    'idc1' => $reserv->getidreservc1(),
                     'nbrjourv' => $reserv->getnbrjourv(),
                     'accessv' => $reserv->getaccessv(),
                     'nbrexcurv' => $reserv->getnbrexcurv(),
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