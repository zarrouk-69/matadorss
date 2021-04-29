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

	}
    ?>