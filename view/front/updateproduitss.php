<?php
    require_once 'C:/xampp/htdocs/projet/controller/produitC.php';
    require_once 'C:/xampp/htdocs/projet/entities/produit.php';
    require_once 'C:/xampp/htdocs/projet/controller/panierC.php';
    require_once 'C:/xampp/htdocs/projet/entities/panier.php';

    $produitC =  new produitC();
    $panierC =  new panierC();
	$panierss = $panierC->countpanier();

    if (isset($_POST['qtepr']) && isset($_POST['idpr']) ) {
        $panier = new panier((int)$_POST['qtepr'] , (int)$_POST['idpr']);
        
        $panierC->addpanier($panier);

        //header('Location:showproduits.php');
    }
    

   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Purple Buzz HTML Template with Bootstrap 5 Beta 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="/projet/assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/projet/assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="/projet/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="/projet/assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="/projet/assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/projet/assets/css/custom.css">
    <link rel="stylesheet" href="/projet/assets/css/drop.css">
    <link rel="stylesheet" href="/projet/assets/css/magnify.css">
    <link rel="stylesheet" href="/projet/assets/css/all.min.css">
    <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js></script>

<!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>


<body>
 <!-- Header -->
 <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="index.html">
                <i class='bx bx-buildings bx-sm text-dark'></i>
                <span class="text-dark h4">Purple</span> <span class="text-primary h4">Buzz</span>
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
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="about.html">Animaux</a>
                                <div class="dropdown-content">
                                  <a href="contact.html">Animaux</a>
                                  <a href="contact.php">Site</a>
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
                    <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a>
                    <a class="nav-link" href="login.php"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
                    <a class="nav-link" href="showpanier.php"><i class="fas fa-shopping-cart"><?php
 echo(substr(json_encode( $panierss ), -4, 1)) ?> </i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->
    <script>
$(document).ready(function() {
  $('.zoom').magnify();
});
</script>


    <?php
        if (isset($_GET['idpr'])) {
            $result = $produitC->getproduitById($_GET['idpr']);
			if ($result !== false) {
    ?>
       

	<section class="container">
</br>
		<h2>precomander produit</h2>
        </br>

        <form action="" method = "POST" onsubmit="myFunction()">
		<div class="form-container">
            <form action="" method = "POST">
            <img src="/projet/assets/img/<?= $result['image'] ?>"  width = "200" height = "200" id="image" class="zoom" data-magnify-src="/projet/assets/img/<?= $result['image'] ?>" > 

            <span class="shop-item-price"><?= $result['description'] ?> </span>
            <div class="col-75" onsubmit="myFunction()">
        
             <form action="post-method.php" method="post">
                        <input type="number" name = "qtepr" required ="" min="1">
                        </form>
                    </div>
                    <?php
                    if ( filter_has_var( INPUT_POST, 'submit' ) ) {
                    $qtepr= 0;
                    $h="submit";
                    $qtepr = $_REQUEST['qtepr'];
                    if ($qtepr>$result['qtestock'])
                    {
                    echo '<span style="color:#FF0000;text-align:center;">Desole la quantite de stock est inferieure a votre quantite de precomande</span>';
                    $qtepr="";
                    $_GET['idprec'];}
                    else { echo '<span style="color:#008000;text-align:center;">produit ajoute au panier</span>';
                        

                    }
                    }
                 //if $result['qtestock']>"qtepr"

            ?>
                    <div class="col-75">
                    <div class="col-3">
                      <p hidden>  <input type="number" name = "idpr" value="<?= $result['idpr']  ?>"></p>
                      <input type="submit" value="ajouter" name = "submit">
                      </div>
                    </div>
                  
                

    <?php
        }
    }
        
        else {
            header('Location:showproduits.php');
        }
    
    ?>
             <?php
$actual_link = "https://fb.com";
?>

<br>

<?php
echo '<iframe src="https://www.facebook.com/plugins/share_button.php?href='.$actual_link.'&layout=button_count&size=large&mobile_iframe=true&width=83&height=28&appId" width="83" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>';
?>
		</section>

		 <!-- Start Footer -->
		 <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.html">
                        <i class='bx bx-buildings bx-sm text-light'></i>
                        <span class="text-light h5">Purple</span> <span class="text-light h5 semi-bold-600">Buzz</span>
                    </a>
                    <p class="text-light my-lg-4 my-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut.
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
                            © Copyright 2021 Purple Buzz Company. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-end text-center text-light light-300">
                            Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://templatemo.com/" target="_blank"><strong>TemplateMo</strong></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->


    <!-- Bootstrap -->
    <script src="/projet/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Load jQuery require for isotope -->
    <script src="/projet/assets/js/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="/projet/assets/js/isotope.pkgd.js"></script>
    <!-- Page Script -->
   
    <!-- Templatemo -->
    <script src="/projet/assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="/projet/assets/js/custom.js"></script>
    <script src="/projet/assets/js/jquery.magnify.js"></script>



</body>
<script > function myFunction()
{
    alert("valide")
    var test=document.getElementById('qtepr').value
    alert(test)
}

        </script>
        </script>

</html>