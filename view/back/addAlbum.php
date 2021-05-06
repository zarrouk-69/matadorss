<?php
    require_once '../controller/albumC.php';
    require_once '../entities/album.php';

    $sponsorC =  new sponsorC();

    if (isset($_POST['nomS']) && isset($_POST['numtlph']) && isset($_POST['dateD']) && isset($_POST['dateF']) && isset($_POST['desc'])&& isset($_POST['logoS'])) {
        $sponsor = new sponsor($_POST['nomS'],(int) $_POST['numtlph'], $_POST['dateD'], $_POST['dateF'], $_POST['desc'],$_POST['logoS']);
        
        $sponsorC->addSponsor($sponsor);

        header('Location:/Sendmail/envoyer_des_mails.php');
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
		<h2>New Sponsor</h2>
        <a href = "showAlbums.php" class="btn btn-primary shop-item-button">All Sponsors</a>
		<div class="form-container">
            <form action="" method = "POST">
                <div class="row">
                    <div class="col-25">                
                        <label>Nom: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "nomS" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Numero telephone:</label>
                    </div>
                    <div class="col-75">
                        <input type="telephone" pattern="[0-9]{8}" name = "numtlph"  required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>date Debut:</label>
                    </div>
                    <div class="col-75">
                        <input type = "date" name = "dateD" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>date Fin:</label>
                    </div>
                    <div class="col-75">
                        <input type = "date" name = "dateF" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Description:</label>
                    </div>
                    <div class="col-75">
                        
                        <textarea rows="4" cols="50" name="desc" > </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Logo:</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" name = "logoS" required="">
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