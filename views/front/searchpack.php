<?php
    require_once 'C:/xampp/htdocs/integration/controller/packC.php';
      require_once 'C:/xampp/htdocs/integration/controller/hotelC.php';

    $hotelC =  new hotelC();
    $hotels = $hotelC->afficherhotel();

    $packC =  new packC();
   


?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="..//integration/assets/css/style.css">
<head>
	 <title>Purple Buzz - Contact Page</title>
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

--><style>
.dropdown2 {
  position: relative;
  display: inline-block;
}

.dropdown2-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 1300px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown2-content a {
  color: black;
  padding: 10px 10px;
  text-decoration: none;
  display: inline;
}
.dropdown2:hover .dropdown2-content {
  display: inline;
}

.desc2 {
  padding: 15px;
  text-align: center;
}
</style>  
</head>

<body>
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
                                  <a href="showpack.php">Site</a>
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
                                  <a href="showpack.php">Pack</a>
                                  <a href="showhotel.php">hotel</a>
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
<a type="button" class="btn btn-primary shop-item-button" href = "showpack.php?>">retour</a>
	<section class="container">
		<h2></h2>
		<div class="form-container">
            <form action="" method = 'POST' onsubmit="myFunction()">
                <div class="row">
                    <div class="col-25">                
                        <label>Search nom: </label>
                    </div>
                    <div class="col-75">
                        <input  type = "text" id="nomh5" onkeyup="onck()" name = 'pack'>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">                
                        <label>Search type: </label>
                    </div>
                    <div class="col-75">
                        <input  type = "text"  id="type5" name = 'type' >
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type = "submit"  value = "Search" name ="search">
                </div>
            </form>
		</div>
	</section>
<script>
    function myFunction() {
          var test=document.getElementById('nomh5').value
          var test2=document.getElementById('type5').value
 if (test===""&&test2==="") {alert("les deux champs ne doivent pas etre vide")}
    }
 /* function onck(){
   document.getElementById('myForm').submit();
  }*/
</script>
	<?php
		if (isset($_POST['pack']) && isset($_POST['search'])){
			$result = $packC->afficherpacknom($_POST['pack']);
			$results = $packC->afficherpacknom($_POST['pack']);
			if ($result !== false) {
	?>
		<section class="container">
			<h2>pack</h2>
			<a href = "showpack.php" class="btn btn-primary shop-item-button">All packs</a>
			<div class="shop-items">
				<?php
					foreach ($results as $pack) {
				?>
				                <div class="shop-item">
                    <strong class="shop-item-title"> <?= $pack['nompack'] ?>   </strong>
                  </div>
                  <div class="shop-item">
                    <strong class="shop-item-title">  type:<?= $pack['typepack'] ?>  </strong>
                  </div>
                   <div class="shop-item">
                    <strong class="shop-item-title"> Hotel <?= $pack['hotel1'] ?>   </strong>
                  </div>
                  <div>
<div class="dropdown2">
  <a  href = "showimage1.php?idpack=<?= $pack['idpack'] ?>"><img src="/integration/assets/img/<?= $pack['imagepack'] ?>" alt="Cinque Terre" width="200" height="200"></a>
  <div class="dropdown2-content">
      <?php
        $hothot = $pack['idh1'];
       
        //if (isset($_GET['idh1'])) {
            $result11 = $hotelC->getHotelById($hothot);
            if ($result11 !== false) {
    ?>
 <a><img src="/integration/assets/img/<?= $result11['imagehotel1'] ?>" alt="Cinque Terre" width="300" height="200"></a>
 <a><img src="/integration/assets/img/<?= $result11['imagehotel2'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/integration/assets/img/<?= $result11['imagehotel3'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/integration/assets/img/<?= $result11['imagehotel4'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <div class="desc">Beautiful</div>
  </div>
</div>


               <?php
        //}
    }
      
    
    ?>

                    <?= $pack['descpack'] ?>
                    </div>
                    <div class="shop-item-details">
                      <div>  <span class="shop-item-price">ce pack comporte <?= $pack['nbrjour'] ?> jour(s). </span>
                          <span class="shop-item-price"><?= $pack['access'] ?> access au resto et</span>
                           <span class="shop-item-price"><?= $pack['nbrexcur'] ?> excursion(s).</span></div>
                        <span class="shop-item-price"><?= $pack['prixpack'] ?> dt.</span>
  
                    </div>
                </div>
                <div><hr></div>
				<?php 
					}
				?>
				
			</div>
		</section>
	<?php
		}
		
	
		elseif (isset($_POST['type']) && isset($_POST['search'])){
			$result = $packC->afficherpacktype($_POST['type']);
			$results = $packC->afficherpacktype($_POST['type']);
			if ($result !== false) {
	?>
		<section class="container">
			<h2>pack</h2>
			<a href = "showpack.php" class="btn btn-primary shop-item-button">All packs</a>
			<div class="shop-items">
				
				<?php
					foreach ($results as $pack) {
				?>
				    <div class="shop-item">
                    <strong class="shop-item-title"> <?= $pack['nompack'] ?>   </strong>
                  </div>
                  <div class="shop-item">
                    <strong class="shop-item-title">  type:<?= $pack['typepack'] ?>  </strong>
                  </div>
                   <div class="shop-item">
                    <strong class="shop-item-title"> Hotel <?= $pack['hotel1'] ?>   </strong>
                  </div>
                  <div>
<div class="dropdown2">
  <a  href = "showimage1.php?idpack=<?= $pack['idpack'] ?>"><img src="/integration/assets/img/<?= $pack['imagepack'] ?>" alt="Cinque Terre" width="200" height="200"></a>
  <div class="dropdown2-content">
     <?php
        $hothot = $pack['idh1'];
       
        //if (isset($_GET['idh1'])) {
            $result11 = $hotelC->getHotelById($hothot);
            if ($result11 !== false) {
    ?>
 <a><img src="/integration/assets/img/<?= $result11['imagehotel1'] ?>" alt="Cinque Terre" width="300" height="200"></a>
 <a><img src="/integration/assets/img/<?= $result11['imagehotel2'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/integration/assets/img/<?= $result11['imagehotel3'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/integration/assets/img/<?= $result11['imagehotel4'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <div class="desc">Beautiful</div>
  </div>
</div>

               <?php
        //}
    }
      
    
    ?>


                    <?= $pack['descpack'] ?>
                    </div>
                    <div class="shop-item-details">
                      <div>  <span class="shop-item-price">ce pack comporte <?= $pack['nbrjour'] ?> jour(s). </span>
                          <span class="shop-item-price"><?= $pack['access'] ?> access au resto et</span>
                           <span class="shop-item-price"><?= $pack['nbrexcur'] ?> excursion(s).</span></div>
                        <span class="shop-item-price"><?= $pack['prixpack'] ?> dt.</span>
    
                    </div>
                </div>
                <div><hr></div>
				<?php 
					}
				?>
				
			</div>
		</section>
	<?php
		}
		else {
			echo "<div> No results found!!! </div>";
		}
	}}
	?>
	
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
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.html">Home</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="about.html">About Us</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="work.html">Work</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i></i><a class="text-decoration-none text-light py-1" href="pricing.html">Price</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="contact.html">Contact</a>
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
    <!-- Templatemo -->
    <script src="/integration/assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="/integration/assets/js/custom.js"></script>
</body>

</html>