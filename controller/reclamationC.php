<?php
    require_once 'C:/xampp/htdocs/integration/config.php';
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
                    'SELECT * FROM reclamation WHERE type= :type'
                );
                $query->execute([
                    'type' => $type
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

       function ajouterclamation($reclamation){
        $sql="insert into reclamation (dateR,texteR,type,idclient) values (:dateR, :texteR, :type,:idclient)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $dateR=$reclamation->getdate();
        $texteR=$reclamation->gettexte();
        $type=$reclamation->gettype();
        $idclient=$reclamation->getidclient();
        $req->bindValue(':dateR',$dateR);        
        $req->bindValue(':texteR',$texteR);
        $req->bindValue(':type',$type);
        $req->bindValue(':idclient',$idclient);
                
            $req->execute();
           
        }
        catch (Exception $e){
            die ('Erreur: '.$e->getMessage());
        }       
    }
        public function updaterec($reclamation, $id) {
            try {
                $pdo =config:: getConnexion();
                $query = $pdo->prepare(
                    'UPDATE reclamation SET dateR = :dateR, texteR = :texteR, type = :typeR WHERE idR= :id'
                );
                $query->execute([
                    
                    'dateR' => $reclamation->getdate(),
                    'texteR' => $reclamation->gettexte(),
                    'typeR' => $reclamation->gettype(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " reclamations UPDATED successfully";
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
          function afficherrec($id){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From reclamation where idclient= $id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

        
    }
    ?>