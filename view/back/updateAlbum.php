<?php
    require_once '../controller/sponsorC.php';
    require_once '../entities/sponsor.php';

    $sponsorC =  new sponsorC();

    if (isset($_POST['nomS']) && isset($_POST['numtlph']) && isset($_POST['dateD']) && isset($_POST['dateF']) && isset($_POST['desc'])&& isset($_POST['logoS'])) {
        $sponsor = new sponsor($_POST['nomS'],(int) $_POST['numtlph'], $_POST['dateD'], $_POST['dateF'], $_POST['desc'], $_POST['logoS']);
        
        $sponsorC->updateSponsor($sponsor, $_GET['idS']);
        header('Location:showsponsor.php');
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
    <?php
        if (isset($_GET['idS'])) {
            $result = $sponsorC->getSponsorById($_GET['idS']);
			if ($result !== false) {
    ?>
	<section class="container">
		<h2>Update Sponsor</h2>
        <a href = "showsponsor.php" class="btn btn-primary shop-item-button">All sponsors</a>
		<div class="form-container">
            <form action="" method = "POST">
                <div class="row">
                    <div class="col-25">                
                        <label>Nom: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "nomS"  value = "<?= $result['nomS'] ?> ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Telephone:</label>
                    </div>
                    <div class="col-75">
                        <input type="Telephone" name = "numtlph" value = "<?= $result['numtlph'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>date debut:</label>
                    </div>
                    <div class="col-75">
                        <input type = "date" name = "dateD" value = "<?= $result['dateD'] ?>">
                    </div>
                </div>
                 <div class="row">
                    <div class="col-25">
                        <label>date fin:</label>
                    </div>
                    <div class="col-75">
                        <input type = "date" name = "dateF" value = "<?= $result['dateF'] ?>">
                    </div>
                </div>
                 <div class="row">
                    <div class="col-25">
                        <label>Description:</label>
                    </div>
                    <div class="col-75">
                        
                        <textarea rows="4" cols="50" name="desc"  value = "<?= $result['descr'] ?>" > </textarea>
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

    <?php
        }
    }
        else {
            header('Location:showsponsor.php');
        }
    
    ?>
	<?php include_once 'footer.php'; ?>

    <script src="../assets/js/script.js"></script>
</body>

</html>