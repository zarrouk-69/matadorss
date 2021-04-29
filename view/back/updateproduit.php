<?php
    require_once '../controller/produitC.php';
    require_once '../entities/produit.php';

    $produitC =  new produitC();

    if (isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['image'])&& isset($_POST['categorie'])&& isset($_POST['qtestock'])) {
        $produit = new produit($_POST['nom'], (float)$_POST['prix'], $_POST['image'], $_POST['categorie'], (int)$_POST['qtestock']);
        
        $produitC->updateproduit($produit,$_GET['idpr']);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

    <a href = "searchproduit.php" class="btn btn-primary shop-item-button">Search</a>
    <?php
        if (isset($_GET['idpr'])) {
            $result = $produitC->getproduitById($_GET['idpr']);
			if ($result !== false) {
    ?>
	<section class="container">
		<h2>Update produit</h2>
        <a href = "showproduits.php" class="btn btn-primary shop-item-button">All produit</a>
		<div class="form-container">
            <form action="" method = "POST"  onsubmit="myFunction()">
                <div class="row">
                    <div class="col-25">                
                        <label>nom: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "nom" value = "<?= $result['nom'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Price</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "prix" value = "<?= $result['prix'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>categorie</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "categorie" value = "<?= $result['categorie'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>quantite stock</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "qtestock" value = "<?= $result['qtestock'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Image</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" name = "image" value = "<?= $result['image'] ?>">
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Submit" name = "submit">
                </div>
            </form>
		</div>
	</section>

    <?php
        }
    }
        else {
            header('Location:showproduits.php');
        }
    
    ?>
	<?php include_once 'footer.php'; ?>
    <script > function myFunction()
{
    alert("aaaaa")
    var test=document.getElementById('nom').value
    alert(test)
}

        </script>
<script src="../assets/js/script.js"></script>
</body>

</html>