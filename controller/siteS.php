<?php
    require_once ('../.././config.php');
    class siteS {
        public function afficherSite() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM site'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getSiteById($id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM site WHERE numS = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getSiteByNomS($nomS) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM site WHERE nomS = :nomS'
                );
                $query->execute([
                    'nomS' => $nomS
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function addSite($site) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO site (nomS, descS, imageS) 
                VALUES (:nomS, :descS, :imageS)'
                );
                $query->execute([
                    'nomS' => $site->getNomS(),
                    'descS' => $site->getDescS(),
                    'imageS' => $site->getImageS()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateSite($site, $id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'UPDATE site SET nomS = :nomS, descS = :descS, imageS = :imageS WHERE numS = :id'
                );
                $query->execute([
                    'nomS' => $site->getNomS(),
                    'descS' => $site->getDescS(),
                    'imageS' => $site->getImageS(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteSite($id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM site WHERE numS = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function rechercherSite($nomS) {            
            $sql = "SELECT * from site where nomS=:nomS"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'nomS' => $site->getNomS(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
         public function trierSiteDesc() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM site ORDER BY nomS DESC'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function trierSite() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM site ORDER BY nomS'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        
    }
    ?>