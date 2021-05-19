<?php
    require_once 'C:/xampp/htdocs/integration/controller/donC.php';

    $donC =  new donC();

	$dons = $donC->afficherDon();

	if (isset($_GET['iddon'])) {
		$donC->deleteDon($_GET['iddon']);
		header('Location:showdon.php');
	}

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
                    <a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
                    <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a>
                    <a class="nav-link" href="login.php"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->
<!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light">
        <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                    Develop <strong>Strategies</strong> for 
                                  <br>your business
                              </h1>
                                <p class="banner-body text-muted py-3 mx-0 px-0">
                                    Purple Buzz is a corporate HTML template with Bootstrap 5 Beta 1. This CSS template is 100% free to download provided by <a rel="nofollow" href="https://templatemo.com/page/1" target="_parent">TemplateMo</a>. Total 6 HTML pages included in this template. Icon fonts by <a rel="nofollow" href="https://boxicons.com/" target="_blank">Boxicons</a>. Photos are from <a rel="nofollow" href="https://unsplash.com/" target="_blank">Unsplash</a> and <a rel="nofollow" href="https://icons8.com/" target="_blank">Icons 8</a>.
                              </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                    HTML CSS Template with Bootstrap 5 Beta 1
                                </h1>
                                <p class="banner-body text-muted py-3">
                                    You are not allowed to re-distribute this Purple Buzz HTML template as a downloadable ZIP file on any kind of Free CSS collection websites. This is strongly prohibited. Please contact TemplateMo for more information.
                                </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                    Cupidatat non proident, sunt in culpa qui officia
                                </h1>
                                <p class="banner-body text-muted py-3">
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat.
                                </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a>
                            </div>
                        </div>

                    </div>
                </div>
                <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <i class='bx bx-chevron-left'></i>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            <!-- End slider -->

        </div>
    </div>
    <!-- End Banner Hero -->
	
		<section class="container">
			<h2>Tables des Dons</h2>
			<a href = "adddon.php" class="btn btn-primary shop-item-button" href = "#">Ajouter</a>
			
			<div class="shop-items">
				<?php
					foreach ($dons as $don) {
				?>
				<div class="shop-item">
					
					<table>
						<tr>
							<th>montant </th>
                            <hr>
							<th>badge</th>
                            <hr>
							<th>nature</th>

						</tr>
						<tr>

					<td><strong class="shop-item-title"> <?= $don['montantdon'] ?> Dt</strong></td>
					<td><a><img src="/integration/assets/img/<?= $don['dateD'] ?>" alt="Cinque Terre" width="100" height="100"></a></td>
					<div class="shop-item">

						<td><span class="shop-item-title"><?= $don['naturedon'] ?> </span></td>
						
						<hr>
						</tr>
					
					 </table>	
					
						<a type="button" class="btn btn-primary shop-item-button" href = "updatedon.php?iddon=<?= $don['iddon'] ?>">Modifier</a>
						<a type="button" class="btn btn-primary shop-item-button" href = "showdon.php?iddon=<?= $don['iddon'] ?>">Supprimer</a>
	
				    </div>
				
			</div>
				<?php 
					}
				?>
			</div>

		</section>

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
<script src="/integration/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Load jQuery require for isotope -->
    <script src="/integration/assets/js/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="/integration/assets/js/isotope.pkgd.js"></script>
    <script src="/integration/assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="/integration/assets/js/custom.js"></script>
</body>

</html>