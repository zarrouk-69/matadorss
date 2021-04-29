<?php
    require_once 'C:/xampp/htdocs/ateleir8/config.php';
    class sponsorC {
        public function afficherSponsor() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM sponsor'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getSponsorById($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM sponsor WHERE idS = :idS'
                );
                $query->execute([
                    'idS' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getSponsorByNom($nom) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM sponsor WHERE nomS = :nomS'
                );
                $query->execute([
                    'nomS' => $nom
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function addSponsor($sponsor) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO sponsor (nomS,numtlph,dateD,dateF,descr,logoS) 
                VALUES (:nomS,:numtlph,:dateD,:dateF,:descr,:logoS)'
                );
                $query->execute([
                    'nomS' => $sponsor->getNomSpon(),
                    'numtlph' => $sponsor->getNumtel(),
                    'dateD' => $sponsor->getDateDebut(),
                    'dateF' => $sponsor->getDateFin(),
                    'descr' => $sponsor->getDescription(),
                    'logoS' => $sponsor->getLogo()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateSponsor( $sponsor, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE sponsor SET nomS = :nomS, numtlph = :numtlph, dateD = :dateD, dateF = :dateF,descr= :descr,logoS= :logoS WHERE idS = :idS'
                );
                $query->execute([
                    'nomS' => $sponsor->getNomSpon(),
                    'numtlph' => $sponsor->getNumtel(),
                    'dateD' => $sponsor->getDateDebut(),
                    'dateF' => $sponsor->getDateFin(),
                    'descr' => $sponsor->getDescription(),
                    'logoS' => $sponsor->getLogo(),
                    'idS' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteSponsor($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM sponsor WHERE idS = :idS'
                );
                $query->execute([
                    'idS' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function rechercherSponsor($nom) {            
            $sql = "SELECT * from sponsor where nomS=:nom"; 
            $db = getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'nomS' => $nom->getNomSpon(),
                ]); 
                $result=$query->fetchAll(); 
                 //$sponsor->getNomSpon()
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
         public function trierSponsor() {            
            $sql = "SELECT * from sponsor order by  nomS "; 
            $db = getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute(); 
                $result=$query->fetchAll(); 
                 //$sponsor->getNomSpon()
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function trierSponsor1() {            
            $sql = "SELECT * from sponsor order by  dateD "; 
            $db = getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute(); 
                $result=$query->fetchAll(); 
                 //$sponsor->getNomSpon()
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
        
    }
    ?>