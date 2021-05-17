<?php
// Ceci est générique. Il s'agit de se connecter à la base de données
require_once 'C:/xampp/htdocs/integration/config.php';
 
// Variable utilisé pour afficher une notification d'erreur ou de succès
$msg = '';
 
if (empty($_GET['token'])) {	// Si aucun token n'est spécifié en paramètre de l'URL
	echo 'Aucun token n\'a été spécifié';
	exit;
}
 
// On récupère les informations par rapport au token dans la base de données
$pdo= config::getConnexion();
$query = $pdo->prepare('SELECT password_recovery_asked_date FROM utilisateur WHERE password_recovery_token = ?');
$query->bindValue(1, $_GET['token'],PDO::PARAM_STR);
$query->execute();
 
$row = $query->fetch(PDO::FETCH_ASSOC);
 
if (empty($row)) {	// Si aucune info associée au token n'est trouvé
	echo 'Ce token n\'a pas été trouvé';
	exit;
}
 
// On calcul la date de la génération du token + 3hrs
$tokenDate = strtotime('+3 hours', strtotime($row['password_recovery_asked_date']));
$todayDate = time();
 
if ($tokenDate < $todayDate) {	// Si la date est dépassé le délais de 3hrs
	echo 'Token expiré !';
	exit;
}
 
if (!empty($_POST)) {	// Si le formulaire a été soumis
	if (!empty($_POST['mdpU']) && !empty($_POST['password_confirm'])) {	// Si le formulaire est correctement remplit
		if ($_POST['mdpU'] === $_POST['password_confirm']) {	// Si les deux mots de passes sont les mêmes
			// On hash le mot de passe
			//$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 
			// On modifie les informations dans la base de données
			$query = $pdo->prepare('UPDATE utilisateur SET mdpU = ? WHERE password_recovery_token = ?');
			$query->bindValue(1, $_POST['mdpU']);
			//$query->bindValue(1, $_GET['token']);
			$query->execute();
                
 
			$msg = '<div style="color:green;">Le mot de passe a été changé !</div>';
		} else {	// si les deux mots de passe ne sont pas identiques
			$msg = '<div style="color:red;">Les deux mots de passes ne sont pas identiques.</div>';
		}
	} else {
		$msg = '<div style="color:red;">Veuillez remplir tous les champs du formulaire.</div>';
	}
}
?>
<h1>Réinitialiser le mot de passe</h1>
 
<?php echo $msg; ?>
 
<form action="reinitialisation-mot-de-passe.php?token=<?php echo $_GET['token']; ?>" method="post">
	<label>Mot de passe: <input type="password" name="mdpU" value="" /></label><br />
	<label>Confirmation du mot de passe : <input type="password" name="password_confirm" value="" /></label><br />
	<button type="submit">Changer le mot de passe</button>
</form>