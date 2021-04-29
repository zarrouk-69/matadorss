<?php
   require_once 'C:/xampp/htdocs/ateleir8/controller/sponsorC.php';

    $sponsorC =  new sponsorC();

	$sponsors = $sponsorC->afficherSponsor();

	if (isset($_GET['idS'])) {
		$sponsorC->deleteSponsor($_GET['idS']);
		header('Location:showsponsor.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="/ateleir8/assets/css/style.css">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: inline;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>	


</head>

<body>
	<?php include_once 'header.php'; ?>
	<a href = "searchsponsor.php" class="btn btn-primary shop-item-button">Search</a>
		<section class="container">
			<h2>SPONSORS</h2>
			<a href = "addsponsor.php" class="btn btn-primary shop-item-button" href = "#">Ajouter</a>
			<a href = "triersponsor.php" class="btn btn-primary shop-item-button" href = "#">Trier</a>
			<div id="wl" class="shop-items">
				<?php
					foreach ($sponsors as $sponsor) {
				?>
				
				<div  class="shop-item">
					<div class="dropdown">
					<a  ><img src="/ateleir8/assets/img//<?= $sponsor['logoS'] ?>" width="400" height="200"> </a>
					<div class="dropdown-content">
						<strong class="shop-item-title">Nom: <?= $sponsor['nomS'] ?></strong>
						<span class="shop-item-title">Numero: <?= $sponsor['numtlph'] ?> </span>
						<span class="shop-item-title">Date Debut: <?= $sponsor['dateD'] ?> </span>
						<span class="shop-item-title">Date Fin : <?= $sponsor['dateF'] ?> </span>
						<span class="shop-item-title">Description: <?= $sponsor['descr'] ?> </span>
					</div>
				</div>
				
						
                          
						<a type="button" class="btn btn-primary shop-item-button" href = "updatesponsor.php?idS=<?= $sponsor['idS'] ?>">Modifier</a>
						<a type="button" class="btn btn-primary shop-item-button" href = "showsponsor.php?idS=<?= $sponsor['idS'] ?>">Supprimer</a>

					
					</div>
					
				<lr>

				<?php 
					}
				?>
			</div>
			<!--<div id="wl1" class="shop-items">
				<?php
					foreach ($sponsors as $sponsor) {
				?>

                     <div>
						<a type="button" onclick="myFunction()" ><img src="../images/<?= $sponsor['logoS'] ?>" width="400" height="200"> </a>
						<button onclick="myFunction()"> test</button>
						
					</div>
					<?php 
					}
				?>
					</div>
			<script>
							wl.style.display = "none";
function myFunction() {
  var x = document.getElementById("wl");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>-->
		</section>

	<?php include_once 'footer.php'; ?>

    <script src="/ateleir8/assets/js/script.js"></script>


</body>

</html>