<?php
    require_once '../controller/sponsorC.php';

    $sponsorC =  new sponsorC();

       // header('Location:showAlbums.php');
    
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

	<section class="container">
		<h2></h2>
		<div class="form-container">
            <form action="" method = 'POST'>
                <div class="row">
                    <div class="col-25">                
                        <label>Search Sponsor: </label>
                    </div>
                    <div class="col-75">
                        <input type = "text" name = 'sponsor' required="">
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
						<img src="../images/<?= $result['logoS'] ?>" width="400" height="200"> 
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

    <script src="../assets/js/script.js"></script>
</body>

</html>