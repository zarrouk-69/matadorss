<?php
    require_once '/xampp/htdocs/integration/config.php';
    class packC {
        public function afficherpack() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM pack '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
         public function afficherpacktri() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM pack ORDER BY nompack '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherpacktritype() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM pack ORDER BY typepack '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherpacktridesc() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM pack ORDER BY nompack DESC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherpacktridesctype() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM pack ORDER BY typepack DESC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
         public function afficherpacktriprix() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM pack ORDER BY prixpack '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherpacktridescprix() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM pack ORDER BY prixpack DESC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
       public function afficherpacknom($nomh) {
            try { 
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM pack  WHERE nompack like ("%":st"%")'
                );
                $query->execute(['st' => $nomh]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
         public function afficherpacktype($tt) {
            try { 
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM pack  WHERE typepack like ("%":rt"%")'
                );
                $query->execute(['rt' => $tt]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function getpackById($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM pack WHERE idpack = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getpackByTitle($nomh) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM pack WHERE nompack = :nomh'
                );
                $query->execute([
                    'nomh' => $nomh
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function getpackBytype($type) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM pack WHERE typepack = :type'
                );
                $query->execute([
                    'type' => $type
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function addpack($pack) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO pack (nompack, prixpack, imagepack, typepack, descpack, idh1, nbrjour, access, nbrexcur, hotel1) 
                VALUES (:nomh, :prix, :image,  :type, :desch, :idh1, :nbrjour, :access, :nbrexcur, :hotel1)'
                );
                $query->execute([
                    'nomh' => $pack->getnompack(),
                    'prix' => $pack->getprixpack(),
                    'image' => $pack->getimagepack(),
                    'type' => $pack->gettypepack(),
                    'desch' => $pack->getdescpack(),
                     'idh1' => $pack->getidpackh1(),
                     'nbrjour' => $pack->getnbrjour(),
                     'access' => $pack->getaccess(),
                     'nbrexcur' => $pack->getnbrexcur(),
                     'hotel1' => $pack->gethotelnom1()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updatepack($pack, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE pack SET nompack = :nomh, prixpack = :prix, imagepack = :image,  typepack = :type, descpack = :desch, idh1 = :idh1, nbrjour = :nbrjour, access = :access, nbrexcur = :nbrexcur, hotel1 = :hotel1 WHERE idpack = :id'
                );
                $query->execute([
                    'nomh' => $pack->getnompack(),
                    'prix' => $pack->getprixpack(),
                    'image' => $pack->getimagepack(),
                    'type' => $pack->gettypepack(),
                    'desch' => $pack->getdescpack(),
                    'idh1' => $pack->getidpackh1(),
                     'nbrjour' => $pack->getnbrjour(),
                     'access' => $pack->getaccess(),
                     'nbrexcur' => $pack->getnbrexcur(),
                     'hotel1' => $pack->gethotelnom1(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deletepack($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM pack WHERE idpack = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function rechercherpack($nomp) {            
            $sql = "SELECT * from pack where nompack=:nomp"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'nompack' => $pack->getnompack(),
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