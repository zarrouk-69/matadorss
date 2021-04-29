<?php
    require_once 'C:/xampp/htdocs/ateleir8/config.php';
    class donC {
        public function afficherDon() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM don'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getDonById($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM don WHERE iddon = :iddon'
                );
                $query->execute([
                    'iddon' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

     

        public function addDon($don) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO don (montantdon,naturedon,dateD) 
                VALUES (:montantdon,:naturedon,:dateD)'
                );
                $query->execute([
                    'montantdon' => $don->getMontant(),
                    'naturedon' => $don->getNature(),
                    'dateD' => $don->getDateD()
                ]);
                
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateDon( $don, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE don SET montantdon = :montantdon, naturedon = :naturedon, dateD= :dateD WHERE iddon = :iddon'
                );
                $query->execute([
                    'montantdon' => $don->getMontant(),
                    'naturedon' => $don->getNature(),
                    'dateD' => $don->getDateD(),
                    'iddon' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteDon($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM don WHERE iddon = :iddon'
                );
                $query->execute([
                    'iddon' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
     }
    ?>