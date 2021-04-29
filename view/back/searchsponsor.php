<?php
    require_once 'C:/xampp/htdocs/ateleir8/controller/sponsorC.php';

    $sponsorC =  new sponsorC();

       // header('Location:showAlbums.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="/ateleir8/assets/css/style.css">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
<?php include_once 'header.php'; ?>

	<section class="container">
		<h2></h2>
		<div class="form-container">
            <form action="" method = 'POST' onsubmit="myFunction()">
                <div class="row">
                    <div class="col-25">                
                        <label>Search Sponsor: </label>
                    </div>
                    <div class="col-75">
                        <input id="nom" type = "text" name = 'sponsor' >
                    </div>
                </div>
                <br>
                <div class="row">
                	
                    <input type = "submit" value = "Search" name ="search" >
                </div>
            </form>
               <script >
	function myFunction(){
  var test=document.getElementById('nom').value
 
  if (test==="") 
  	{alert("les deux champs ne doivent pas etre vide")}
  	
  	else{
           
            alert("aaaaa")
  		
			}
}
</script>
		</div>

	</section>

	<?php
	
		if (isset($_POST['sponsor']) && isset($_POST['search'])){
			$result = $sponsorC->getSponsorByNom($_POST['sponsor']);
			
			if ($result !== false) {
	
	?>
		<section class="container">
			<h2>Sponsors</h2>
			<a href = "showsponsor.php" class="btn btn-primary shop-item-button">All Sponsors</a>
			
				
					
				
				<div class="shop-item">
					<strong class="shop-item-title"> <?= $result['nomS'] ?> </strong>
					
					<div class="shop-item">
						<span class="shop-item-title"><?= $result['numtlph'] ?> </span>
						<span class="shop-item-title"><?= $result['dateD'] ?> </span>
						<span class="shop-item-title"><?= $result['dateF'] ?> </span>
						<span class="shop-item-title"><?= $result['descr'] ?> </span>
						<img src="/ateleir8/assets/img/<?= $result['logoS'] ?>" width="400" height="200"> 
						<a type="button" class="btn btn-primary shop-item-button" href = "updatesponsor.php?idS=<?= $sponsor['idS'] ?>">Modifier</a>
						<a type="button" class="btn btn-primary shop-item-button" href = "showsponsor.php?idS=<?= $sponsor['idS'] ?>">Supprimer</a>
					</div>
				</div>

		</section>
	<?php
		}
		else {
			echo "<div> No results found!!! </div>";
		}
	}

	?>
<?php include_once 'footer.php'; ?>

    <script src="/ateleir8/assets/js/script.js"></script>
 
</body>

</html>