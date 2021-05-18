<?php
    require_once 'C:/xampp/htdocs/integration/controller/reservC.php';
    require_once 'C:/xampp/htdocs/integration/entities/reserv.php';
require_once 'C:/xampp/htdocs/integration/controller/packC.php';
    require_once 'C:/xampp/htdocs/integration/entities/pack.php';
    require_once 'C:/xampp/htdocs/integration/controller/hotelC.php';
    require_once 'C:/xampp/htdocs/integration/entities/hotel.php';

    $reservC =  new reservC();
     $packC =  new packC();
   $hotelC =  new hotelC();
    if (isset($_POST['prixreserv'])  && isset($_POST['typereserv']) && isset($_POST['idh1']) && isset($_POST['idc1']) && isset($_POST['nbrjourv']) && isset($_POST['accessv']) && isset($_POST['nbrexcurv']) && isset($_POST['datereserv'])) {
          $result11 = $hotelC->getHotelById($_POST['idh1']);
            if ($result11 !== false) {
        $reserv = new reserv((int)$_POST['prixreserv'], $_POST['typereserv'], (int)$_POST['idh1'], (int)$_POST['idc1'], (int)$_POST['nbrjourv'], $_POST['accessv'], (int)$_POST['nbrexcurv'],$result11['nomhotel'],  $_POST['datereserv']);
        
        $reservC->addreserv($reserv);

        header('Location:showpack.php');
    }}
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

-->

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
                                  <a href="showreserv.php">Site</a>
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
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="about.html">pack</a>
                                <div class="dropdown-content">
                                  <a href="showpack.php">pack</a>
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
     <?php
        if (isset($_GET['idpack'])) {
            $result = $packC->getpackById($_GET['idpack']);
            if ($result !== false) {
    ?>
	<section class="container">
		<h2>New reserv</h2>
       
		<div class="form-container">
            <form action="" method = "POST" onsubmit="myFunction()">
                  <div hidden class="row">
                    <div class="col-25">
                        <label>client</label>
                    </div>
                    <div  class="col-75">
                        <input type="number" value = "25"name = "idc1" min="0" required="" >
                    </div>
                </div>
              
                 <div hidden class="row">
                    <div class="col-25">
                        <label>nombre de jour</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "nbrjourv" min="0" value = "<?= $result['nbrjour'] ?>"required="" >
                    </div>
                </div>
                 <div class="row">
                    <div class="col-25">
                        <label>date</label>
                    </div>
                    <div class="col-75">
                        <input type="date" name = "datereserv" min="<?php echo date('Y-m-d'); ?>" required="" >
                    </div>
                </div>
               

    <?php
        }
    }
        else {
            header('Location:showpack.php');
        }
    
    ?>
                    </div>
                </div>
                 <div hidden class="row">
                    <div class="col-25">
                        <label>nombre d'excursion</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "nbrexcurv" min="0" value = "<?= $result['nbrexcur'] ?>" required="" >
                    </div>
                </div>
                 <div hidden class="row">
                    <div class="col-25">
                        <label>type</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "typereserv" value = "<?= $result['typepack'] ?>" required="">
                    </div>
                </div>
                <div  hidden class="row">
                    <div class="col-25">
                        <label>Price</label>
                    </div>
                    <div  class="col-75">
                        <input type="number"  name = "prixreserv" value = "<?= $result['prixpack'] ?>" required="" >
                    </div>
                </div>
                    <div hidden  class="row">
                    <div class="col-25">
                        <label>access au resto</label>
                    </div>
                    <div  class="col-75">
                        <input type="text"   name = "accessv" value = "<?= $result['access'] ?>" required="" >
                    </div>
                </div>
                    <div hidden  class="row">
                    <div class="col-25">
                        <label>hotel</label>
                    </div>
                    <div  class="col-75">
                        <input type="number"  name = "idh1" value = "<?= $result['idh1'] ?>" required="" >
                    </div>
                </div>

                  

<div class="shop-item">
                    <strong class="shop-item-title"> <?= $result['nompack'] ?>  </strong>
                  </div>
                   <div class="shop-item">
                    <strong class="shop-item-title"> Hotel <?= $result['hotel1'] ?>   </strong>
                  </div>
                   <div class="shop-item">
                    <strong class="shop-item-title">  type:<?= $result['typepack'] ?> </strong>
                  </div>
          <div> <?= $result['descpack'] ?></div>
          <div>
                  
                    <div class="shop-item-details">
                        <div>  <span class="shop-item-price">ce pack comporte <?= $result['nbrjour'] ?> jour(s). </span>
                          <span class="shop-item-price"><?= $result['access'] ?> access au resto et</span>
                           <span class="shop-item-price"><?= $result['nbrexcur'] ?> excursion(s).</span></div>
                        <span class="shop-item-price"><?= $result['prixpack'] ?> dt.</span>
  
                <br>
                  <strong class="shop-item-title"> confirmer votre reservation: </strong>
                <div class="row">
                    <input  type="submit" value="Submit" name = "submit">
                    
                 </div>
            </form>
            <script>
                function myFunction(){
                    alert("nous vous souhatons un agreable sejour")
                }
            </script>
		</div>
       
      <!--  <script>
    function myFunction() {
          var test=document.getElementById('nom55').value
          var test2=document.getElementById('prix55').value
           var test3=document.getElementById('type55').value
          var test4=document.getElementById('desc55').value
           var test5=document.getElementById('imh55').value
          var test6=document.getElementById('imh551').value
           var test7=document.getElementById('imh552').value
          var test8=document.getElementById('imh553').value
            var test9=document.getElementById('imh554').value
 if (test===""||test2===""test3===""||test4===""test5===""||test6===""test7===""||test8===""test9==="") {alert("les deux champs ne doivent pas etre vide")}
    }
</script>-->
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