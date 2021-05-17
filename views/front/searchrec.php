<?php
    require_once 'C:/xampp/htdocs/integration/controller/reclamationC.php';

    $reclamationC =  new reclamationC();

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../assets/css/style.css">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


	<section class="container">
		<h2></h2>
		<div class="form-container">
            <form action="" method = 'POST'>
                <div class="row">
                    <div class="col-25">                
                        <label>rechercher par Type: </label>
                    </div>
                    <div class="col-75">
                        <input type = "text" name = 'reclamation' required="">
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
		if (isset($_POST['reclamation']) && isset($_POST['search'])){
			$result = $reclamationC->getrecByType($_POST['reclamation']);
			if ($result !== false) {
	?>
		<section class="container">
			<h2>reclamation</h2>
			<a href = "showrec.php" class="btn btn-primary shop-item-button">reclamations</a>
			<div class="shop-items">
				
				<div class="shop-item">
					<strong class="shop-item-title"> <?= $result['typeR'] ?> </strong>
					<div class="shop-item-details">
						<span class="shop-item-price"><?= $result['dateR'] ?></span>
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