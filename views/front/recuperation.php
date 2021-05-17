   <?php
// Ceci est générique. Il s'agit de se connecter à la base de données
require_once 'C:/xampp/htdocs/integration/config.php';
 
// Variable utilisé pour afficher une notification d'erreur ou de succès
$msg = '';

if (!empty($_POST)) {   // Si le formulaire a été soumis
   if (!empty($_POST['adresseU'])) {   // Si le formulaire est correctement remplit
      // On fait une requête pour savoir si l'adresse e-mail est associé à un compte
      $pdo = config::getConnexion();
      $adresseU = htmlspecialchars($_POST['adresseU']);
      $query = $pdo->prepare('SELECT COUNT(*) AS nb FROM utilisateur WHERE adresseU = ?');
      $query->bindValue(1, $_POST['adresseU']);
      $query->execute();
 
      $row = $query->fetch(PDO::FETCH_ASSOC);
 
      if (!empty($row) && $row['nb'] > 0) {  // Si l'adresse courriel est associé à un compte
         // On génère notre token
         $string = implode('', array_merge(range('A','Z'), range('a','z'), range('0','9')));
         $token = substr(str_shuffle($string), 0, 20);
 
         // On insère la date et le token dans la DB
         $query = $pdo->prepare('UPDATE utilisateur SET password_recovery_asked_date = NOW(), password_recovery_token = ? WHERE adresseU = ?');
         $query->bindValue(1, $token);
         $query->bindValue(2, $adresseU);
         $query->execute();
 ini_set('SMTP', 'smtp.topnet.tn');
         // On prépare l'envoie du courriel
         $link = "http://localhost:10080/integration/views/front/reinitialisation-mot-de-passe.php?token=".$token;
         $to = $_POST['adresseU'];
         $subject = 'Réinitisalisation de votre mot de passe';
         $message = '<h1>Réinitisalition de votre mot de passe</h1><p>Pour réinitialiser votre mot de passe, veuillez suivre ce lien : <a href="'.$link.'">'.$link.'</a></p>';
 
         // On défini les entêtes requis
          $header="MIME-Version: 1.0\r\n";
                     $header.='From:"naturious.com"<support@naturious.com>'."\n";
                     $header.='Content-Type:text/html; charset="uft-8"'."\n";
                     $header.='Content-Transfer-Encoding: 8bit';
            $message='<h1>Réinitisalition de votre mot de passe</h1><p>Pour réinitialiser votre mot de passe, veuillez suivre ce lien : <a href="'.$link.'">'.$link.'</a></p>';
 
                   
 
         // On envoie le courriel
         ini_set('SMTP', 'smtp.topnet.tn');
         //mail($to, $subject, $message, implode("\r\n", $headers));
       mail($adresseU, "Confirmation de compte", $message, $header);
         $msg = '<div style="color: green;">Un courriel a été acheminé. Veuillez regarder votre boîte aux lettres et suivre les instructions à l\'intérieur du courriel.</div>';
      } else { // Si elle n'est pas associé à un compte
         $msg = '<div style="color: red;">Cette adresse courriel n\'a pas été trouvée dans la base de données.</div>';
      }
   } else { // Si le formulaire n'est pas correctement remplit
      $msg = '<div style="color: red;">Veuillez spécifier une adresse courriel.</div>';
   }
}
?>
<h1>Demander une réinitialisation de mot de passe</h1>
 
<?php echo $msg; ?>
 
<form action="" method="post">
   <label>Votre adresse courriel : <input type="text" name="adresseU" value="" /></label>
   <button type="submit">Envoyer la demande</button>
</form>