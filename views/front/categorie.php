<?php
    require_once 'C:/xampp/htdocs/integration/controller/produitC.php';
    require_once 'C:/xampp/htdocs/integration/controller/panierC.php';


    $produitC =  new produitC();



	//$produits = $produitC->afficherproduit();
    $produits2 = $produitC->afficherproduitcat();
    if (isset($_GET['categoriePr']))
    {$produits = $produitC->recherchecategrie(($_GET['categoriePr']));}
	
    $panierC =  new panierC();

	$paniers = $panierC->countpanier();


	if (isset($_GET['idpr'])) {
		$produitC->deleteproduit($_GET['idpr']);
		header('Location:showproduits.php');
	}
    if(isset($_POST['submit'])){
        if(!empty($_POST['Fruit'])) {
            $selected = $_POST['Fruit'];
            if($selected=="1"){$produits = $produitC->triproduitd();}
                elseif($selected=="2"){$produits = $produitC->triproduitda();}
        }}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Purple Buzz HTML Template with Bootstrap 5 Beta 1</title>
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
    <link rel="stylesheet" href="/integration/assets/css/style.css">
    <link rel="stylesheet" href="/integration/assets/css/all.min.css">



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
 echo(substr(json_encode( $paniers ), -4, 1)) ?> </i></a>

                </div>
            </div>
        </div>
    </nav>
    <style>
.center {
  margin: 0;
  position: absolute;
  top: 18.4%;
  left: 87%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>

    <!-- Close Header -->
    <br>
<form action="" method="post">
<span>Trier par : </span>

    <select name="Fruit">
        <option value="1">prix croissant</option>
        <option value="2">prix décroissant </option>
    </select>
    <input type="submit" name="submit" vlaue="Choose options">

</form>
<div class="center"><a href = "searchproduit.php" class="btn btn-primary shop-item-button" >Search</a>
</div>
<style>    

#div1 {
    background-color: #f2f2f2;
    vertical-align: middle;
    display: inline-block;
    width:200px;
    height:500px;
    margin-right: 5%;
    padding: 0 7em 2em 0;border-width: 2px;
    margin-left: 2.5em;padding: 0 7em 2em 0;
    border-radius: 25px;

}
#div2 {
    width:900px;
    vertical-align: middle;
    display: inline-block;
    margin-right: 10%;

}
a {
  outline: none;
  text-decoration: none;
  padding: 2px 1px 0;
}


</style>
<div id="wrapper">
  <div id="div1">
 <a href = "showproduits.php?"><div class="a">&nbsp;&nbsp;Tous&nbsp;les&nbsp;categories</div>
                <?php
				foreach ($produits2 as $produit) {
				?> 
                                   <a  href = "categorie.php?categoriePr=<?= $produit['categoriePr'] ?>">
                                    <p  class="shop-item-title" ><?= $produit['categoriePr'] ?> </p>

                <?php 
				}
				?>

  </div>
  <div id="div2">

		<section class="container">
			<div class="row">
            <br>
            <br>
            <h2>LES PRODUITS</h2>
            <?php
					foreach ($produits as $produit) {
				?>
   
  
				
                <div class="col-4">
                    <p>
                    <a href = "updateproduitss.php?idpr=<?= $produit['idpr'] ?>">
                    <div class="zoom colonne">
                    <div>
                    <img src="/integration/assets/img/<?= $produit['imagePr'] ?>" width = "200" height = "200" class="shop-item-image">
                    </div>
                    </div>
                    </a>
                    <p  class="shop-item-title" ><?= $produit['nomPr'] ?> </p>
                    <strong class="shop-item-price"><?= $produit['prixPr'] ?> DT</strong>
                   
                    </p>

                        </div>
                        <?php
		if (isset($_POST['categoriePr'])){
			$result = $produitC->recherchecategrie($_POST['categoriePr']);
			if ($result !== false) {
                echo"ok";
	?>
				<?php 
					}
                }
            }
				?>
                </div> 
		</section>
        </div>
        </div>


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
    <script src="/integration/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Load jQuery require for isotope -->
    <script src="/integration/assets/js/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="/integration/assets/js/isotope.pkgd.js"></script>
    <!-- Page Script -->
   
    <!-- Templatemo -->
    <script src="/integration/assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="/integration/assets/js/custom.js"></script>


</body>

</html>