<?php
    require_once 'C:/xampp/htdocs/integration/config.php';
    
    class badgeC {
        public function afficherBadge() {
            try {
                $pdo = config::getConnexion();
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
                $pdo = config::getConnexion();
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
                $pdo = config::getConnexion();
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