<?PHP
    include "../views/config.php";
    require_once '../entities/user.php';

    class UtilisateurC {
        function connexionUser($email,$password){
            $sql="SELECT * FROM Utilisateur WHERE adresseU='" . $email . "' and mdpU = '". $password."'";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==0) {
                    $message = "pseudo ou le mot de passe est incorrect";
                } else {
                    $x=$query->fetch();
                    $message = $x['role'];
                }
            }
            catch (Exception $e){
                    $message= " ".$e->getMessage();
            }
          return $message;
        }
        function modifierUtilisateur($Utilisateur, $id){
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE utilisateur SET 
                        nomU = :nom, 
                        prenomU = :prenom,
                        adresseU = :email,
                        mdpU = :password
                    WHERE idU = :id'
                );
                $query->execute([
                    'nom' => $utilisateur->getnomU(),
                    'prenom' => $utilisateur->getprenomU(),
                    'email' => $utilisateur->getadresseU(),
                    'password' => $utilisateur->getmdpU(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
           function ajouterUtilisateur($Utilisateur){
            $sql="INSERT INTO utilisateur (nomU, prenomU, adresseU, mdpU) 
            VALUES (:nom,:prenom,:email, :password)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'nom' => $Utilisateur->getnomU(),
                    'prenom' => $Utilisateur->getprenomU(),
                    'email' => $Utilisateur->getadresseU(),
                    'password' => $Utilisateur->getmdpU()
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }


        function afficherUtilisateurs(){
            
            $sql="SELECT * FROM utilisateur";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        }

        function supprimerUtilisateur($id){
            $sql="DELETE FROM utilisateur WHERE idU= :id";
            $db = config::getConnexion();
            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            try{
                $req->execute();
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        function recupererUtilisateur($id){
            $sql="SELECT * from utilisateur where idU=$id";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();

                $user=$query->fetch();
                return $user;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        function recupererUtilisateur1($id){
            $sql="SELECT * from utilisateur where idU=$id";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
                
                $user = $query->fetch(PDO::FETCH_OBJ);
                return $user;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

	}
    ?>