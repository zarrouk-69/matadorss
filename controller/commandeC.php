<?php
    require_once 'C:/xampp/htdocs/integration/config.php';
    class commandeC {
        public function affichercommande() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM commande'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function countcommande() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT COUNT(*) FROM commande
                    '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function updatecoommande($commande, $id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'UPDATE commande SET prixTotalprec = :prixTotalprec WHERE idPrec = :id'
                );
                $query->execute([
                    'prixTotalprec' => $produit->getprixTotalprec(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getcommandeById($id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM commande WHERE idPrec = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


        public function addcommande($commande) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO commande ( qtePrec , datePrec, prixTotalprec,idc) 
                VALUES (:qtePrec , :datePrec, :prixTotalprec,:idc)'
                );
                $query->execute([
                    'qtePrec' => $commande->getqtePrec(),
                    'datePrec' => $commande->getdatePrec(),
                    'prixTotalprec' => $commande->getprixTotalprec(),
                    'idc' => $commande->getidc(),
                    
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


        
    }
    ?>