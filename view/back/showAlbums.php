<?php
    require_once '../controller/sponsorC.php';

    $sponsorC =  new sponsorC();

	$sponsors = $sponsorC->afficherSponsor();

	if (isset($_GET['idS'])) {
		$sponsorC->deleteSponsor($_GET['idS']);
		header('Location:showAlbums.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../assets/css/style.css">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		


</head>

<body>
	<?php include_once 'header.php'; ?>
	<a href = "searchAlbum.php" class="btn btn-primary shop-item-button">Search</a>
		<section class="container">
			<h2>SPONSORS</h2>
			<a href = "addsponsor.php" class="btn btn-primary shop-item-button" href = "#">Ajouter</a>
			<a href = "triersponsor.php" class="btn btn-primary shop-item-button" href = "#">Trier</a>
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
						<img src="../images/<?= $sponsor['logoS'] ?>" width="400" height="200"> 
						<a type="button" class="btn btn-primary shop-item-button" href = "updateAlbum.php?idS=<?= $sponsor['idS'] ?>">Modifier</a>
						<a type="button" class="btn btn-primary shop-item-button" href = "showAlbums.php?idS=<?= $sponsor['idS'] ?>">Supprimer</a>

					</div>
				</div>
				<?php 
					}
				?>
			</div>
		</section>

	<?php include_once 'footer.php'; ?>

    <script src="../assets/js/script.js"></script>


</body>

</html>