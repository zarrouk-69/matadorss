<?php
    
 require_once 'C:/xampp/htdocs/integration/controller/siteS.php';
    require_once 'C:/xampp/htdocs/integration/entities/site.php';
    $siteS =  new siteS();

    if (isset($_POST['nomS']) && isset($_POST['descS']) && isset($_POST['imageS'])) {
        $site = new site($_POST['nomS'], $_POST['descS'], $_POST['imageS']);
        
        $siteS->updateSite($site,$_GET['numS']);
    }
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="../.././assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="../.././assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="../.././assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="../.././assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="../.././assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../.././assets/css/custom.css">
    <link rel="stylesheet" href="../.././assets/css/drop.css">

</head>

<body>
<!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="index.html">
                <i class='bx bx-buildings bx-sm text-dark'></i>
                <span class="text-dark h4">Naturious</span> 
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="index.html">Aceuil</a>
                        </li>
                       
                            <!-- Nav -->
                             
             
                            <div class="dropdown">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="showAlbums3.php">Animaux</a>
                                <div class="dropdown-content">
                                  <a href="showAlbums3.php">Animaux</a>
                                  <a href="showAlbums1.php">Site</a>
                                </div>
                              </div>
                        
    
                              <div class="dropdown">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="about.html">Evenement</a>
                                <div class="dropdown-content">
                                  <a href="contact.html">Ticket</a>
                                  <a href="contact.php">Evenement</a>
                                </div>
                              </div>
                              <div class="dropdown">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="about.html">Pack</a>
                                <div class="dropdown-content">
                                  <a href="contact.html">Pack</a>
                                  <a href="contact.php">Hotel</a>
                                </div>
                              </div>
                              
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="contact.html">Boutique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="contact.html">contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
                    <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a>
                    <a class="nav-link" href="login.php"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->
    <!-- Start Banner Hero -->
    <section class="bg-light w-100">
        <div class="container">
            <div class="row d-flex align-items-center py-5">
                <div class="col-lg-6 text-start">
                    <h1 class="h2 py-5 text-primary typo-space-line">Sites</h1>
    <a href = "searchAlbum1.php" class="btn btn-primary shop-item-button">Rechercher</a>
    
    <?php
        if (isset($_GET['numS'])) {
            $result = $siteS->getSiteById($_GET['numS']);
			if ($result !== false) {
    ?>
	<section class="container">
		<h2>Update Site</h2>
        <form action="" method="POST" onsubmit= "myFunction()">
        <a href = "showAlbums1.php" class="btn btn-primary shop-item-button">All sites</a>
		<div class="form-container">
            <form action="" method = "POST">
                <div class="row">
                    <div class="col-25">                
                        <label>Nom: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "nomS" value = "<?= $result['nomS'] ?>">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>description</label>
                    </div>
                    <div class="col-75">
                        <input type="textarea" name = "descS" value = "<?= $result['descS'] ?>">
                
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Image</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" name = "imageS" value = "<?= $result['imageS'] ?>">
                    </div>
                </div>
                <br>
                <div class="row">
                    <input id ="a" type="submit" value="Submit" name = "submit">
                </div>
            </form>
		</div> <div class="col-lg-6">
                    <img src="./../.././assets/img/ba.svg">
                </div>
        </div>
    </section>
	</section>
    

    <?php
        }
    }
        else {
            header('Location:showAlbums1.php');
        }
    
    ?>
	
</body>
  <script> function myFunction()
  {
    alert("voulez vraiment modifier ?")
    var test=document.getElementById('a').value
    alert(test)
  }
</script>
</html>