<?php
    require_once '../controller/reclamationC.php';
    require_once '../entities/reclamation.php';

    $reclamationC =  new reclamationC();

    if (isset($_POST['typeR']) && isset($_POST['dateR']) && isset($_POST['texteR'])) {
        $reclamation = new reclamation($_POST['typeR'], $_POST['dateR'], $_POST['texteR']);
        
        $reclamationC->addreclamation($reclamation);

        header('Location:showrec.php');
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
	<section class="container">
		<h2>Nouvelle reclamation</h2>
        <a href = "showrec.php" class="btn btn-primary shop-item-button">All reclamation</a>
		<div class="form-container">
            <form action="" method = "POST">
                <div class="row">
                    <div class="col-25">                
                        <label>Type: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "typeR" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>date</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "dateR" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>votre texte</label>
                    </div>
                    <div class="col-75">
                        <input type = "text" name = "texteR" required="">
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