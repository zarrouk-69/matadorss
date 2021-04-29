	<?php
session_start();
 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=projetweb', 'root', '');
 
if(isset($_SESSION['idU'])) {
   $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE idU = ?");
   $requser->execute(array($_SESSION['idU']));
   $user = $requser->fetch();
   if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $user['nomU']) {
      $newpseudo = htmlspecialchars($_POST['newnom']);
      $insertpseudo = $bdd->prepare("UPDATE utilisateur SET nomU = ? WHERE id = ?");
      $insertpseudo->execute(array($newnom, $_SESSION['idU']));
      header('Location: profilUser.php?id='.$_SESSION['idU']);
   }
   if(isset($_POST['newadresse']) AND !empty($_POST['newadresse']) AND $_POST['newadresse'] != $user['adresseU']) {
      $newmail = htmlspecialchars($_POST['newadresse']);
      $insertmail = $bdd->prepare("UPDATE utilisateur SET adresseU = ? WHERE idU = ?");
      $insertmail->execute(array($newmail, $_SESSION['idU']));
      header('Location: profilUser.php?id='.$_SESSION['idU']);
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE utilisateur SET mdpU = ? WHERE idU = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: profilUser.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
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
         <h2>Edition de mon profil</h2>
         <div align="left">
            <form method="POST" action="" enctype="multipart/form-data">
               <label>Pseudo :</label>
               <input type="text" name="newnom" placeholder="nom" value="<?php echo $user['nomU']; ?>" /><br /><br />
               <label>Mail :</label>
               <input type="text" name="newadresse" placeholder="adresse" value="<?php echo $user['adresseU']; ?>" /><br /><br />
               <label>Mot de passe :</label>
               <input type="password" name="newmdp1" placeholder="Mot de passe"/><br /><br />
               <label>Confirmation - mot de passe :</label>
               <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" /><br /><br />
               <input type="submit" value="Mettre à jour mon profil !" />
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>
   </body>
</html>
<?php   
}
/*else {
   header("Location: connexionn.php");
}*/
?>