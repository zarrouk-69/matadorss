<?PHP
include "../entities/reclamation.php";
include "../controller/reclamationC.php";


if ( isset($_POST['texteR']) and isset($_POST['dateR']) and isset($_POST['type']) ) {
$rec1=new reclamation($_POST['texteR'],$_POST['dateR'],$_POST['type']);
$rec1C=new reclamationC();
$rec1C->ajouterclamation($rec1);
header("Location: showrec.php");

}else{
	echo "vérifier les champs";
}

?>