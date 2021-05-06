<?php
    require_once '../views/config.php';
    class reclamationC {
        public function afficherreclamation() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reclamation'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getrecById($id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reclamation WHERE idR = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getrecByType($type) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reclamation WHERE typeR = :typeR'
                );
                $query->execute([
                    'typeR' => $type
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function addreclamation($reclamation) {
            try {
                $pdo =config::getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO reclamation (typeR,dateR,texteR) 
                VALUES (:typeR,:dateR,:texteR)'
                );
                $query->execute([
                    'typeR' => $reclamation->gettype(),
                    'dateR' => $reclamation->getdate(),
                    'texteR' => $reclamation->gettexte()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function updaterec($reclamation, $id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'UPDATE reclamation SET typeR = :typeR, dateR = :dateR, texteR = :texteR WHERE idR= :id'
                );
                $query->execute([
                    'typeR' => $reclamation->gettype(),
                    'dateR' => $reclamation->getdate(),
                    'texteR' => $reclamation->gettexte(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleterec($id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM reclamation WHERE idR = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function rechercherrec($reclamation) {            
            $sql = "SELECT * from reclamation where typeR=:type"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'type' => $reclamation->gettype(),
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