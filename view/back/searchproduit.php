<?php
    require_once '../controller/produitC.php';

    $produitC =  new produitC();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/style.css">


</head>

<body>


	<section class="container">
		<h2></h2>
		<div class="form-container">
            <form action="" method = 'POST'>
                <div class="row">
                    <div class="col-25">                
                        <label>Search produit: </label>
                    </div>
                    <div class="col-75">
                        <input type = "text" name = 'produit'>
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type = "submit" value = "Search" name ="search">
                </div>
            </form>
		</div>
	</section>

	<?php
		if (isset($_POST['produit']) && isset($_POST['search'])){
			$result = $produitC->getproduitByTitle($_POST['produit']);
			if ($result !== false) {
	?>
		<section class="container">
			<h2>PRODUITS</h2>
			<a href = "showproduits.php" class="btn btn-primary shop-item-button">All produits</a>
			<div class="shop-items">
				
				<div class="shop-item">
					<strong class="shop-item-title"> <?= $result['nom'] ?> </strong>
					<img src="../images/<?= $result['image'] ?>" class="shop-item-image">
					<div class="shop-item-details">
						<span class="shop-item-price"><?= $result['prix'] ?> dt.</span>
					</div>
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

<script src="../assets/js/script.js"></script>
</body>

</html>