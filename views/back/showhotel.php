<?php
    require_once 'C:/xampp/htdocs/integration/controller/hotelC.php';

    $hotelC =  new hotelC();
    $hotels = $hotelC->afficherhotel();
  if(isset($_POST['submit'])){
    if(!empty($_POST['Fruit'])) {
        $selected = $_POST['Fruit'];
        if($selected=="1"){$hotels = $hotelC->afficherhoteltri();}
            elseif($selected=="2"){$hotels = $hotelC->afficherhoteltridesc();}
            elseif($selected=="3"){$hotels = $hotelC->afficherhoteltrinbr();}
            elseif($selected=="4"){$hotels = $hotelC->afficherhoteltridescnbr();}
            elseif($selected=="5"){$hotels = $hotelC->afficherhoteltriprix();}
            elseif($selected=="6"){$hotels = $hotelC->afficherhoteltridescprix();}
                else{$hotels = $hotelC->afficherhotel();}
    } else {
        echo 'Please select the value.';
    }
    }
    


    if (isset($_GET['idhotel'])) {
        $hotelC->deletehotel($_GET['idhotel']);
        header('Location:showhotel.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
   
           
<!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="/integration/assets1/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/integration/assets1/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/integration/assets1/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="/integration/assets1/css/argon.css?v=1.2.0" type="text/css">
    -->



</head>
<style>
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
<body>
    <!-- Header -->
  
    <!-- Close Header -->

<!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="/integration/assets1/img/brand/logo.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="examples/dashboard.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="showrec.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion reclamations </span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="showtype.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion types de reclamation</span>
              </a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="afficherUtilisateurs.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">gestion utilisateurs</span>
            </a></li>
             <li class="nav-item">
              <a class="nav-link" href="showproduits.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">produit</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="index2.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion des précommandes</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="showsponsor.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion des sponsors</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="showdon.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion des dons</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="back_event.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion evenements</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="back_ticket.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion ticket</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="showAlbums4.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion des animaux </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="showAlbums2.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion des sites </span>
              </a>
            </li>
             </li>
             <li class="nav-item">
              <a class="nav-link" href="showpack.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">pack</span>
              </a>
            </li>
             </li>
             <li class="nav-item">
              <a class="nav-link" href="showhotel.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">hotels</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          
          <!-- Navigation -->
         
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
<div class="main-content" id="panel">
    <!-- Start Banner Hero -->
  
    <!-- End Banner Hero -->


    <!-- Start Contact -->
   
<form action="" method="post">
    <select name="Fruit">
        <option value="1">tri nom</option>
        <option value="2">tri nom desc</option>
        <option value="3">tri etoile</option>
        <option value="4">tri etoile desc</option>
        <option value="5">tri prix</option>
        <option value="6">tri prix desc</option>
        <option value="7">random</option>
    </select>

    <input type="submit" name="submit" vlaue="Choose options">*/
</form>

    <a href = "searchhotel.php" class="btn btn-primary shop-item-button">Search</a>
        <section class="container">
            <h2>hotel</h2>
            <a href = "addhotel.php" class="btn btn-primary shop-item-button" href = "#">Ajouter</a>
            <div class="shop-items">
                <?php
                    foreach ($hotels as $hotel) {
                ?>
                <div class="shop-item">
                    <strong class="shop-item-title"> <?= $hotel['nomhotel'] ?> <?= $hotel['nbrhotel'] ?> etoiles </strong>
                  </div>
                  
<div class="dropdown2">
  <a  href = "showimage2.php?idhotel=<?= $hotel['idhotel'] ?>"><img src="/integration/assets/img/<?= $hotel['imagehotel'] ?>" alt="Cinque Terre" width="200" height="200"></a>
  <div class="dropdown2-content">
  <a><img src="/integration/assets/img/<?= $hotel['imagehotel1'] ?>" alt="Cinque Terre" width="300" height="200"></a>
 <a><img src="/integration/assets/img/<?= $hotel['imagehotel2'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/integration/assets/img/<?= $hotel['imagehotel3'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/integration/assets/img/<?= $hotel['imagehotel4'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <div class="desc">Beautiful</div>
  </div>
</div>
  <?= $hotel['deschotel'] ?>
                    
                    <div class="shop-item-details">
                        <span class="shop-item-price"><?= $hotel['prixhotel'] ?> dt.</span>
                        <a type="button" class="btn btn-primary shop-item-button" href = "updatehotel.php?idhotel=<?= $hotel['idhotel'] ?>">Modifier</a>
                        <a type="button" class="btn btn-primary shop-item-button" href = "showhotel.php?idhotel=<?= $hotel['idhotel'] ?>">Supprimer</a>
                    </div>
              
                <div><hr></div>
                <?php 
                    }   
                ?>
           </div>  </div>
        </section>
</div>

            <!-- Start Contact Form -->
     
    <!-- End Contact -->
 <!-- Argon Scripts -->
  <!-- Core -->
  <script src="/integration/assets1/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/integration/assets1/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/integration/assets1/vendor/js-cookie/js.cookie.js"></script>
  <script src="/hotintegrationels/assets1/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="/integration/assets1/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="/integration/assets1/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="/integration/assets1/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="/integration/assets1/js/argon.js?v=1.2.0"></script>

    <!-- Start Footer -->
   
</body>

</html>