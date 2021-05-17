<?php
    require_once '../controller/reclamationC.php';
    require_once '../entities/reclamation.php';

    $reclamationC =  new reclamationC();

    if (isset($_POST['typeR']) && isset($_POST['dateR']) && isset($_POST['texteR'])) {
        $reclamation = new reclamation($_POST['typeR'], $_POST['dateR'], $_POST['texteR']);
        
        $reclamationC->updaterec($reclamation,$_GET['idR']);
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

    <a href = "searchrec.php" class="btn btn-primary shop-item-button">Search</a>
    <?php
        if (isset($_GET['idR'])) {
            $result = $reclamationC->getrecById($_GET['idR']);
			if ($result !== false) {
    ?>
	<section class="container">
		<h2>Update reclamation</h2>
        <a href = "showrec.php" class="btn btn-primary shop-item-button">All recl</a>
		<div class="form-container">
            <form action="" method = "POST">
                <div class="row">
                    <div class="col-25">                
                        <label>Type: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "typeR" value = "<?= $result['typeR'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>date</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "dateR" value = "<?= $result['dateR'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>texte</label>
                    </div>
                    <div class="col-75">
                        <input type = "text" name = "texteR" value = "<?= $result['texteR'] ?>">
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
            header('Location:showrec.php');
        }
    
    ?>
	<?php include_once 'footer.php'; ?>

    <script src="../assets/js/script.js"></script>
</body>

</html>