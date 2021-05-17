<?php
	include '../views/session.php';
	$conn = $pdo->open();

	if(isset($_POST['login'])){
		
		$adresseU = $_POST['adresseU'];
		$mdpU = $_POST['mdpU'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM utilisateur WHERE adresseU = :adresseU");
			$stmt->execute(['adresseU'=>$adresseU]);
			$row = $stmt->fetch();
	if($row['numrows'] > 0){
				if($row['statut']){
					if(password_verify($mdpU,$row['mdpU'])){ 
						if($row['roleU']){
							$_SESSION['admin'] = $row['idU'];

						}
						else{
							$_SESSION['user'] = $row['idU'];

						}
					}
					else{
						$_SESSION['error'] = 'Incorrect Password';
					}
				}
				else{
					$_SESSION['error'] = 'Account not activated.';
				}
			}
			else{
				$_SESSION['error'] = 'Email not found';
			}
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Input login credentails first';
	}

	$pdo->close();

	header('location: login.php');

?>