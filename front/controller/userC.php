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
         public function modifierUser($User, $id) {
            echo 'aaaaaa';
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'UPDATE utilisateur SET nomU = :Nom,prenomU= :Prenom,adresseU = :Email,pseudo = :Pseudo,mdpU = :Mot_de_passe WHERE idU = :id'
            );
            $query->execute([
                'Nom' => $User->getnomU(),
                'Prenom' => $User->getprenomU(),
                'Email' => $User->getadresseU(),
                'Pseudo' => $User->getpseudo(),
                'Mot_de_passe' => $User->getmdpU(),
               
                'id' => $id,
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
         function recuperernom($mail){
      $sql = "SELECT nomU FROM utilisateur where adresseU = '$mail' ";
      $db = config::getConnexion();
      try{
        $liste = $db->query($sql);
        foreach($liste as $row){
          return $row['nomU'];
        }
      }catch (Exception $e){
        die('Erreur: '.$e->getMessage());
      }
    }
    function recupererprenom($mail){
      $sql = "SELECT prenomU FROM utilisateur where adresseU = '$mail' ";
      $db = config::getConnexion();
      try{
        $liste = $db->query($sql);
        foreach($liste as $row){
          return $row['prenomU'];
        }
      }catch (Exception $e){
        die('Erreur: '.$e->getMessage());
      }
    }
     function afficheruserParam($idU, $search, $sort){
            if($iduser == ""){
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
         public function getUser($email) {
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare('SELECT * FROM utilisateur WHERE adresseU = :email '
            );
            $query->execute([
                'email' => $email,
            ]);
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

	}
    ?>