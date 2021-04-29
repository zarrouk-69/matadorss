<?php
    require_once '../controller/produitC.php';
    require_once '../entities/produit.php';

    $produitC =  new produitC();

    if (isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['image'])&& isset($_POST['categorie'])&& isset($_POST['qtestock'])) {
        $produit = new produit($_POST['nom'], (float)$_POST['prix'], $_POST['image'], $_POST['categorie'], (int)$_POST['qtestock']);
        
        $produitC->addproduit($produit);

        header('Location:showproduits.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<link>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
	
    <a href = "searchproduit.php" class="btn btn-primary shop-item-button">Search</a>
	<section class="container">
		<h2>New Produit</h2>
        <a href = "showproduits.php" class="btn btn-primary shop-item-button">All produits</a>
		<div class="form-container">
            <form action="" method = "POST">
                <div class="row">
                    <div class="col-25">                
                        <label>Title: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "nom" required ="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Price</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "prix" required ="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>categorie</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "categorie" required ="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>quantite stock</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "qtestock" required ="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Image</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" name = "image" >
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Submit" name = "submit">
                </div>
            </form>
		</div>
	</section>
	<?php include_once 'footer.php'; ?>

    <script src="../assets/js/script.js"></script>
</body>

</html>