<?php
    require_once 'C:/xampp/htdocs/integration/config.php';
	class typeC{		
		function ajoutertype($type){
			$sql = "INSERT INTO type(idType, libelleT) values(:id, :nom)";
			$db = config::getConnexion();
			try{
		       	$req = $db->prepare($sql);
		       	$id = $type->getidType();
		       	$nom = $type->getlibelleT();
		     
		        $req->bindValue(':id', $id);
		        $req->bindValue(':nom', $nom);
				$req->execute(); 
		    }
		    catch(Exception $e){
		        die('Erreur: '.$e->getMessage());
		    }	
		   
		  
		}
		function affichertypes(){
			$sql = "SELECT * FROM type";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}catch(Exception $e){
		        die('Erreur: '.$e->getMessage());
		    }	
		}
		function supprimertype($id){
			$sql = "DELETE FROM type where idType = :id";
			$db = config::getConnexion();
		    $req = $db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
		        $req->execute();
		    }catch(Exception $e){
		        die('Erreur: '.$e->getMessage());
		    }
		}
		function modifiertype($type, $id){
			$sql = "UPDATE type SET idType = :idNew, libelleT = :nom WHERE idType = :id";
			$db = config::getConnexion();
			try{
		        $req = $db->prepare($sql);
				$idNew = $type->getidType();
				$nom = $type->getlibelleT();

				$datas = array(':idNew' => $idNew, ':nom' => $nom);
				$req->bindValue(':idNew', $idNew);
				$req->bindValue('nom', $nom);
				$req->bindValue(':id', $id);
		        $s = $req->execute();
		    }catch(Exception $e){
		        echo " Erreur ! ".$e->getMessage();
		   		echo " Les datas : " ;
		  		print_r($datas);
		    }	
		}
		function recuperertype($id){
			$sql = "SELECT * FROM type where idType = $id";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}   catch (Exception $e){
		        die('Erreur: '.$e->getMessage());
		    }
		}
		function nbrecBytype(){
			$sql = "SELECT t.libelleT as nomType, count(*) as nb FROM type t, reclamation r WHERE r.type = t.idType GROUP BY t.libelleT ORDER BY count(*)";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}catch (Exception $e){
		        die('Erreur: '.$e->getMessage());
		    }
		}
		function afficher()
	{
		$db=config::getConnexion();
		$sql="select * from type";
		try
		{
			$liste=$db->query($sql);
			return $liste;

		}
		catch(Exception $e){
			die ('erreur : '.$e->getMessage());

		}
	}
	
}	
?>
