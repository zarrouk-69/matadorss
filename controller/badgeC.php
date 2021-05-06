<?php
    require_once 'C:/xampp/htdocs/ateleir8/config.php';
    class badgeC {
        public function afficherBadge() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM badge'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getBadgeById($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM badge WHERE idbad = :idbad'
                );
                $query->execute([
                    'idbad' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

     

        public function addbadge($badge) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO badge (niveau,logim) 
                VALUES (:niveau,:logim)'
                );
                $query->execute([
                    'niveau' => $badge->getNiveau(),
                    'logim' => $badge->getLogoim()
                    
                ]);
                
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

       

        
     }
    ?>