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
         function afficheruserParam($idU, $search, $sort){
            if($idU == ""){
                $user = "";
            }else{
                $user = "idU = ".$idU." AND ";
            }
            $order = "";
            if($sort == 1 || $sort == 5){
                $order = "ASC";
            }
            if($sort == 2 || $sort == 4){
                $order = "DESC";
            }
            $srt = "ORDER BY ";
            switch($sort){
                case 0: 
                    $srt = "";
                    break;
                case 1: case 2:
                    $srt = $srt."nomU";
                    break;
                case 3:
                    $srt = $srt."prenomU";
                    break;
                case 4: case 5:
                    $srt = $srt."adresseU";
                    break;
            }
            $sql = "SELECT * FROM utilisateur WHERE $user nomU LIKE '%$search%' $srt $order";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }catch(Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        }  

	}
    ?>