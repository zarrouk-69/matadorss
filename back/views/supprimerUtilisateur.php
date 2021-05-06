<?PHP
	include "../controller/userC.php";

	$utilisateurC=new UtilisateurC();
	
	if (isset($_POST["id"])){
		$utilisateurC->supprimerUtilisateur($_POST["id"]);
			echo "<script>
alert('suppression avec succes');
window.location.href='afficherUtilisateurs.php';
</script>";
		/*header('Location:afficherUtilisateurs.php');*/
	
	}

?>