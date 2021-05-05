<?php
    require_once 'C:/xampp/htdocs/hotels/controller/hotelC.php';

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
  <link rel="icon" href="/hotels/assets1/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/hotels/assets1/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/hotels/assets1/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="/hotels/assets1/css/argon.css?v=1.2.0" type="text/css">
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
          <img src="/hotels/assets1/img/brand/logo.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="showpack.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">pack</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="showhotel.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">hotels</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active-pro" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade to PRO</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
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
  <a  href = "showimage2.php?idhotel=<?= $hotel['idhotel'] ?>"><img src="/hotels/assets/img/<?= $hotel['imagehotel'] ?>" alt="Cinque Terre" width="200" height="200"></a>
  <div class="dropdown2-content">
  <a><img src="/hotels/assets/img/<?= $hotel['imagehotel1'] ?>" alt="Cinque Terre" width="300" height="200"></a>
 <a><img src="/hotels/assets/img/<?= $hotel['imagehotel2'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/hotels/assets/img/<?= $hotel['imagehotel3'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/hotels/assets/img/<?= $hotel['imagehotel4'] ?>" alt="Cinque Terre" width="300" height="200"></a>
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
  <script src="/hotels/assets1/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/hotels/assets1/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/hotels/assets1/vendor/js-cookie/js.cookie.js"></script>
  <script src="/hotels/assets1/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="/hotels/assets1/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="/hotels/assets1/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="/hotels/assets1/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="/hotels/assets1/js/argon.js?v=1.2.0"></script>

    <!-- Start Footer -->
   
</body>

</html>