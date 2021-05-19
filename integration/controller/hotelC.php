<?php
    require_once '/xampp/htdocs/integration/config.php';
    class HotelC {
        public function afficherHotel() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM hotel '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
         public function afficherHoteltri() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM hotel ORDER BY nomhotel '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherHoteltrinbr() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM hotel ORDER BY nbrhotel '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherHoteltridesc() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM hotel ORDER BY nomhotel DESC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherHoteltridescnbr() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM hotel ORDER BY nbrhotel DESC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
         public function afficherHoteltriprix() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM hotel ORDER BY prixhotel '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function afficherHoteltridescprix() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM hotel ORDER BY prixhotel DESC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
       public function afficherHotelnom($nomh) {
            try { 
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM hotel  WHERE nomhotel like ("%":st"%")'
                );
                $query->execute(['st' => $nomh]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
         public function afficherHotelnbr($tt) {
            try { 
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM hotel  WHERE nbrhotel like ("%":rt"%")'
                );
                $query->execute(['rt' => $tt]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function getHotelById($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM hotel WHERE idhotel = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getHotelByTitle($nomh) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM hotel WHERE nomhotel = :nomh'
                );
                $query->execute([
                    'nomh' => $nomh
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function getHotelByetoile($etoile) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM hotel WHERE nbrhotel = :etoile'
                );
                $query->execute([
                    'etoile' => $etoile
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function addHotel($hotel) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO hotel (nomhotel, prixhotel, imagehotel, imagehotel1, imagehotel2, imagehotel3, imagehotel4, nbrhotel, deschotel) 
                VALUES (:nomh, :prix, :image, :image1, :image2, :image3, :image4, :nbr, :desch)'
                );
                $query->execute([
                    'nomh' => $hotel->getnomhotel(),
                    'prix' => $hotel->getprixhotel(),
                    'image' => $hotel->getimagehotel(),
                    'image1' => $hotel->getimagehotel1(),
                    'image2' => $hotel->getimagehotel2(),
                    'image3' => $hotel->getimagehotel3(),
                    'image4' => $hotel->getimagehotel4(),
                    'nbr' => $hotel->getnbrhotel(),
                    'desch' => $hotel->getdeschotel()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateHotel($hotel, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE hotel SET nomhotel = :nomh, prixhotel = :prix, imagehotel = :image, imagehotel1 = :image1, imagehotel2 = :image2, imagehotel3 = :image3, imagehotel4 = :image4, nbrhotel = :nbr, deschotel = :desch WHERE idhotel = :id'
                );
                $query->execute([
                    'nomh' => $hotel->getnomhotel(),
                    'prix' => $hotel->getprixhotel(),
                    'image' => $hotel->getimagehotel(),
                    'image1' => $hotel->getimagehotel1(),
                    'image2' => $hotel->getimagehotel2(),
                    'image3' => $hotel->getimagehotel3(),
                    'image4' => $hotel->getimagehotel4(),
                    'nbr' => $hotel->getnbrhotel(),
                    'desch' => $hotel->getdeschotel(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteHotel($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM hotel WHERE idhotel = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function rechercherHotel($nomh) {            
            $sql = "SELECT * from hotel where nomhotel=:nomh"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'nomhotel' => $hotel->getnomhotel(),
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