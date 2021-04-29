<?php
    require_once 'C:/xampp/htdocs/ateleir8/controller/sponsorC.php';

    $sponsorC =  new sponsorC();

	$sponsors = $sponsorC->trierSponsor();

	

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
	<a href = "searchsponsor.php" class="btn btn-primary shop-item-button">Search</a>
		<section class="container">
			<form action=""  method = "POST" onclick="myFunction()">
			<h2>SPONSORS</h2>
			<a href = "addsponsor.php" class="btn btn-primary shop-item-button" href = "#">Ajouter</a>
			<a href = "showsponsor.php" class="btn btn-primary shop-item-button" href = "#">Trier</a>
			<div class="shop-items">
				
				<?php
					foreach ($sponsors as $sponsor) {
				?>
				<div class="shop-item">
					<strong class="shop-item-title"> <?= $sponsor['nomS'] ?> </strong>
					
					<div class="shop-item">
						<span class="shop-item-title"><?= $sponsor['numtlph'] ?> </span>
						<span class="shop-item-title"><?= $sponsor['dateD'] ?> </span>
						<span class="shop-item-title"><?= $sponsor['dateF'] ?> </span>
						<span class="shop-item-title"><?= $sponsor['descr'] ?> </span>
						<img src="/ateleir8/assets/img/<?= $sponsor['logoS'] ?>" width="400" height="200"> 
						<a type="button" class="btn btn-primary shop-item-button" href = "updatesponsor.php?idS=<?= $sponsor['idS'] ?>">Modifier</a>
						<a type="button" class="btn btn-primary shop-item-button" href = "showsponsor.php?idS=<?= $sponsor['idS'] ?>">Supprimer</a>
					</div>
				</div>
				<?php 
					}
				?>
				</div>
			</form>
			 <script > function myFunction()
{
    alert("aaaaa")
    var test=document.getElementById('datev22').value
    alert(test)
}

        </script>
			
		</section>

	<?php include_once 'footer.php'; ?>

    <script src="/ateleir8/assets/js/script.js"></script>


</body>

</html>