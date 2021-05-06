<?php
include "../config.php";
include "../controller/userC.php";
session_set_cookie_params(time() + (10 * 365 * 24 * 60 * 60));
session_start();
$email=$_POST['adresseU'];
$password=$_POST['mdpU'];

$ClientC = new userC();
$Clients = $ClientC->afficherClients();
foreach ($Clients  as $row) {
if(($password==$row['mdpU']) && ($email ==$row['adresseU'])){
	$_SESSION['adresseU']=$email ;
	$_SESSION['mdpU']=$password;
  $_SESSION['nomU']=$row['prenomU'];
  /*$_SESSION['image']=$row['image'];*/

	header('Location: profileUser.php');
	  exit();        
}
} 
	header('Location: conexionn.php');


?>
