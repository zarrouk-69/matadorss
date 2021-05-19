<?php
    require_once 'C:/xampp/htdocs/integration/controller/reservC.php';
     require_once 'C:/xampp/htdocs/integration/controller/hotelC.php';

    $hotelC =  new hotelC();
  

    $reservC =  new reservC();
    $reservs = $reservC->afficherreserv();
  if(isset($_POST['submit'])){
    if(!empty($_POST['Fruit'])) {
        $selected = $_POST['Fruit'];
        if($selected=="1"){$reservs = $reservC->afficherreservtri();}
            elseif($selected=="2"){$reservs = $reservC->afficherreservtridesc();}
            elseif($selected=="3"){$reservs = $reservC->afficherreservtritype();}
            elseif($selected=="4"){$reservs = $reservC->afficherreservtridesctype();}
            elseif($selected=="5"){$reservs = $reservC->afficherreservtriprix();}
            elseif($selected=="6"){$reservs = $reservC->afficherreservtridescprix();}
                else{$reservs = $reservC->afficherreserv();}
    } else {
        echo 'Please select the value.';
    }
    }
    


    if (isset($_GET['idreserv'])) {
        $reservC->deletereserv($_GET['idreserv']);
        header('Location:showreserv.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  
<!--
    -->
<link rel="icon" href="/integration/assets1/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/integration/assets1/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/integration/assets1/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="/integration/assets1/css/argon.css?v=1.2.0" type="text/css">


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
              <a class="nav-link active" href="/argon-dashboard-master/index.html">
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
    <!-- Close Header -->


    <!-- Start Banner Hero -->
  
    <!-- End Banner Hero -->


    <!-- Start Contact -->
   
<form action="" method="post">
    <select name="Fruit">
        <option value="1">tri nom</option>
        <option value="2">tri nom desc</option>
        <option value="3">tri type</option>
        <option value="4">tri type desc</option>
        <option value="5">tri prix</option>
        <option value="6">tri prix desc</option>
        <option value="7">random</option>
    </select>

    <input type="submit" name="submit" vlaue="Choose options">*/
</form>

    <a href = "rech.php" class="btn btn-primary shop-item-button">Search</a>
        <section class="container">
            <h2>reserv</h2>
            
            <div class="shop-items">
                <?php
                    foreach ($reservs as $reserv) {
                ?>
                <div class="shop-item">
                    <strong class="shop-item-title"> <?= $reserv['idreserv'] ?>   </strong>
                  </div>
                  <div class="shop-item">
                    <strong class="shop-item-title"> Hotel <?= $reserv['idhot1'] ?>   </strong>
                  </div>
                  <div class="shop-item">
                    <strong class="shop-item-title">  type:<?= $reserv['typereserv'] ?> </strong>
                  </div>
                
                  <div>
<div class="dropdown2">
  

                    <?= $reserv['datereserv'] ?>
                    </div>
                    <div class="shop-item-details">
                    	<div>  <span class="shop-item-price">ce reserv comporte <?= $reserv['nbrjourv'] ?> jour(s). </span>
                          <span class="shop-item-price"><?= $reserv['accessv'] ?> access au resto et</span>
                           <span class="shop-item-price"><?= $reserv['nbrexcurv'] ?> excursion(s).</span></div>
                        <span class="shop-item-price"><?= $reserv['prixreserv'] ?> dt.</span>
                        <a type="button" class="btn btn-primary shop-item-button" href = "updateresrv.php?idreserv=<?= $reserv['idreserv'] ?>">Modifier</a>
                        <a type="button" class="btn btn-primary shop-item-button" href = "showreserv.php?idreserv=<?= $reserv['idreserv'] ?>">Supprimer</a>
                        

                    </div>
                </div>
                <div><hr></div>

                <?php 
                    }   
                ?>
            </div>
        </section>

            <!-- Start Contact Form -->
     
    <!-- End Contact -->


    <!-- Start Footer -->

      </div>
 <script src="/integration/assets1/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/integration/assets1/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/integration/assets1/vendor/js-cookie/js.cookie.js"></script>
  <script src="/integration/assets1/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="/integration/assets1/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="/integration/assets1/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="/integration/assets1/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="/integration/assets1/js/argon.js?v=1.2.0"></script>



</body>

</html>