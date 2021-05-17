<?php
    require_once 'C:/xampp/htdocs/integration/config.php';
    class panierC {
        public function afficherpanier() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM panier'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function countpanier() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT COUNT(*) FROM panier
                    '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


        public function getpanierById($id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM panier WHERE idprec = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


        public function addpanier($panier) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO panier ( qtepr , idpr) 
                VALUES (:qtepr , :idpr)'
                );
                $query->execute([
                    'qtepr' => $panier->getqtepr(),
                    'idpr' => $panier->getidpr(),
                    
                ]);
               
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updatepanier($panier, $id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'UPDATE panier SET qtepr = :qtepr WHERE idprec = :id'
                );
                $query->execute([
                    'qtepr' => $panier->getqtepr(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deletepanier($id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM panier WHERE idprec = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


        
    }
    ?>