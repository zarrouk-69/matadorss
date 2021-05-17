<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=projetweb', 'root', '');
 
if(isset($_GET['pseudo'], $_GET['confirmkey']) AND !empty($_GET['pseudo']) AND !empty($_GET['confirmkey'])) {
   $pseudo = htmlspecialchars(urldecode($_GET['pseudo']));
   $key = htmlspecialchars($_GET['confirmkey']);
   $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE nomU = ? AND confirmkey = ?");
   $requser->execute(array($pseudo, $key));
   $userexist = $requser->rowCount();
   if($userexist == 1) {
      $user = $requser->fetch();
      if($user['confirmkey'] == 0) {
         $updateuser = $bdd->prepare("UPDATE utilisateur SET confirmkey = 1 WHERE nomU = ? AND confirmkey = ?");
         $updateuser->execute(array($pseudo,$key));
         echo "Votre compte a bien été confirmé !";
      } else {
         echo "Votre compte a déjà été confirmé !";
      }
   } else {
      echo "L'utilisateur n'existe pas !";
   }
}
?>
