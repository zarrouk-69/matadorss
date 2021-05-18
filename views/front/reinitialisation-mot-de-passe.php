<?php
// Ceci est générique. Il s'agit de se connecter à la base de données
require_once 'C:/xampp/htdocs/integration/config.php';
 
// Variable utilisé pour afficher une notification d'erreur ou de succès
$msg = '';
 
if (empty($_GET['token'])) {	// Si aucun token n'est spécifié en paramètre de l'URL
	echo 'Aucun token n\'a été spécifié';
	exit;
}
 
// On récupère les informations par rapport au token dans la base de données
$pdo= config::getConnexion();
$query = $pdo->prepare('SELECT password_recovery_asked_date FROM utilisateur WHERE password_recovery_token = ?');
$query->bindValue(1, $_GET['token'],PDO::PARAM_STR);
$query->execute();
 
$row = $query->fetch(PDO::FETCH_ASSOC);
 
if (empty($row)) {	// Si aucune info associée au token n'est trouvé
	echo 'Ce token n\'a pas été trouvé';
	exit;
}
 
// On calcul la date de la génération du token + 3hrs
$tokenDate = strtotime('+3 hours', strtotime($row['password_recovery_asked_date']));
$todayDate = time();
 
if ($tokenDate < $todayDate) {	// Si la date est dépassé le délais de 3hrs
	echo 'Token expiré !';
	exit;
}
 
if (!empty($_POST)) {	// Si le formulaire a été soumis
	if (!empty($_POST['mdpU']) && !empty($_POST['password_confirm'])) {	// Si le formulaire est correctement remplit
		if ($_POST['mdpU'] === $_POST['password_confirm']) {	// Si les deux mots de passes sont les mêmes
			// On hash le mot de passe
			//$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 
			// On modifie les informations dans la base de données
			$query = $pdo->prepare('UPDATE utilisateur SET mdpU = ? WHERE password_recovery_token = ?');
			$query->bindValue(1, $_POST['mdpU']);
			//$query->bindValue(1, $_GET['token'],PDO::PARAM_STR);
			$query->execute(array ($_POST['mdpU'],$_GET['token']));
                
 
			$msg = '<div style="color:green;">Le mot de passe a été changé !</div>';
		} else {	// si les deux mots de passe ne sont pas identiques
			$msg = '<div style="color:red;">Les deux mots de passes ne sont pas identiques.</div>';
		}
	} else {
		$msg = '<div style="color:red;">Veuillez remplir tous les champs du formulaire.</div>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Naturious</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="/integration/assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/integration/assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="/integration/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="/integration/assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="/integration/assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/integration/assets/css/custom.css">
          <link rel="stylesheet" href="/integration/assets/css/drop.css">
            <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 15%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
 <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="index.html">
                <i class='bx bx-buildings bx-sm text-dark'></i>
                <span class="text-dark h4">Naturious</span> <span class="text-primary h4">reserve</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="index.html">Accueil</a>
                        </li>
                       
                            <!-- Nav -->
                             

                            <div class="dropdown">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="about.html">Animaux</a>
                                <div class="dropdown-content">
                                  <a href="contact.html">Animaux</a>
                                  <a href="contact.php">Site</a>
                                </div>
                              </div>
                        
    
                      
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="work.html">Evenement</a>
                            <meta name="viewport" content="width=device-width, initial-scale=1">


                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="pricing.html">Pack</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="showproduits.php">Boutique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="contact.html">contact</a>
                        </li>
                    </ul>
                </div>
               
                  <button onclick="window.location.href='connexion.php';">
     se connecter
    </button>
                            
                        </li>  



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
          </div>
            </div>
        </div>
    </nav>
<center>
	 <section class="service-wrapper py-3">
        <div class="container-fluid pb-3">
            <div class="row">
<h1>Réinitialiser le mot de passe</h1>
 <br><br><br>
<?php echo $msg; ?>
 
<form action="reinitialisation-mot-de-passe.php?token=<?php echo $_GET['token']; ?>" method="post">
	<br><tr><label>Mot de passe: <input type="password" name="mdpU" value="" /></label></tr><br><br>
	<tr><label>Confirmation : <input type="password" name="password_confirm" value="" /></label> </tr><br> <br><br>
	<button type="submit" class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4">Changer le mot de passe</button>
</form>
</div></div></section>
</center>
 <!-- Start Footer -->
    <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.html">
                        <i class='bx bx-buildings bx-sm text-light'></i>
                        <span class="text-light h5">Naturious</span> <span class="text-light h5 semi-bold-600"></span>
                    </a>
                    <p class="text-light my-lg-4 my-2">
                        
                    </p>
                    <ul class="list-inline footer-icons light-300">
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="http://facebook.com/">
                                <i class='bx bxl-facebook-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.linkedin.com/">
                                <i class='bx bxl-linkedin-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.whatsapp.com/">
                                <i class='bx bxl-whatsapp-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.flickr.com/">
                                <i class='bx bxl-flickr-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.medium.com/">
                                <i class='bx bxl-medium-square bx-md' ></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h3 class="h4 pb-lg-3 text-light light-300">Our Company</h2>
                        <ul class="list-unstyled text-light light-300">
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.html">Aceuil</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="about.html">Animaux</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="work.html">Evenement</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i></i><a class="text-decoration-none text-light py-1" href="pricing.html">Pack</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="contact.html">Boutique</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="contact.html">contact</a>
                            </li>
                        </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">Our Works</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Branding</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Business</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Marketing</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Social Media</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Digital Solution</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Graphic</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">For Client</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="w-100 bg-primary py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2021 Naturious. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-end text-center text-light light-300">
                            Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://templatemo.com/" target="_blank"><strong>Naturious</strong></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- Bootstrap -->
    <script src="/integration/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Load jQuery require for isotope -->
    <script src="/integration/assets/js/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="/integration/assets/js/isotope.pkgd.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <!-- Templatemo -->
    <script src="/integration/assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="/integration/assets/js/custom.js"></script>
</body>
</html>
