<?PHP
include "../entities/reclamation.php";
include "../controller/reclamationC.php";
session_start();

if (  isset($_POST['dateR']) and isset($_POST['texteR']) and isset($_POST['type']) ) {
$rec1=new reclamation($_POST['dateR'],$_POST['texteR'],$_POST['type'],$_SESSION['idU']);
$rec1C=new reclamationC();
$rec1C->ajouterclamation($rec1);
header("Location: showrec.php");

}else{
	echo "vérifier les champs";
}

?>