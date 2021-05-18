<?php
require_once 'C:/xampp/htdocs/integration/config.php';
 $bdd = config::getConnexion();
 
if(isset($_GET['nomU'], $_GET['confirmkey']) AND !empty($_GET['nomU']) AND !empty($_GET['confirmkey'])) {
   $nomU = htmlspecialchars(urldecode($_GET['nomU']));
   $key = htmlspecialchars($_GET['confirmkey']);
   $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE nomU = ? AND confirmkey = ?");
   $requser->execute(array($nomU, $key));
   $userexist = $requser->rowCount();
   if($userexist == 1) {
      $user = $requser->fetch();
      if($user['confirme'] == 0) {
         $updateuser = $bdd->prepare("UPDATE utilisateur SET confirm = 1 WHERE nomU = ? AND confirmkey = ?");
         $updateuser->execute(array($nomU,$key));
         echo "Votre compte a bien été confirmé !";
      } else {
         echo "Votre compte a déjà été confirmé !";
      }
   } else {
      echo "L'utilisateur n'existe pas !";
   }
}
?>
