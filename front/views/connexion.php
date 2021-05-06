<?php
session_start();
 
$bdd = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
 
if(isset($_POST['formconnexion'])) {
   $adresseU = htmlspecialchars($_POST['adresseU']);
   $mdpU = sha1($_POST['mdpU']);
   if(!empty($adresseU) AND !empty($mdpU)) {
      $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE adresseU = ? AND mdpU = ?");
      $requser->execute(array($adresseU, $mdpU));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['idU'] = $userinfo['idU'];
         $_SESSION['nomU'] = $userinfo['nomU'];
         header("Location: profilUser.php?idU=".$_SESSION['idU']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST" action="">
            <input type="email" name="adresseU" placeholder="Mail" />
            <input type="password" name="mdpU" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>