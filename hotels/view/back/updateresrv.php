<?php
    require_once 'C:/xampp/htdocs/hotels/controller/reservC.php';
    require_once 'C:/xampp/htdocs/hotels/entities/reserv.php';
 $reservC =  new reservC();
    if ( isset($_POST['submit'])) {
        $result = $reservC->getreservById($_GET['idreserv']);
            if ($result !== false) {
        $reserv = new reserv($result['prixreserv'],$result['typereserv'],$result['idh1'],$result['idc1'],$result['nbrjourv'],$result['accessv'], $result['nbrexcurv'],$result['idhot1'], $_POST['datereserv1']);
        
        $reservC->updatereserv($reserv,$_GET['idreserv']);
    }}

   
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="/hotels/assets1/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/hotels/assets1/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/hotels/assets1/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="/hotels/assets1/css/argon.css?v=1.2.0" type="text/css">
   
<!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->

</head>

<body>
        <!-- Header -->
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
<a type="button" class="btn btn-primary shop-item-button" href = "showreserv.php?>">retour</a>
    <?php
        if (isset($_GET['idreserv'])) {
            $result = $reservC->getreservById($_GET['idreserv']);
			if ($result !== false) {
    ?>
	<section class="container">
		<h2>Update reserv</h2>
        <a href = "showreserv.php" class="btn btn-primary shop-item-button">All reserv</a>
		<div class="form-container">
              <div class="shop-item">
                    <strong class="shop-item-title"> <?= $result['idreserv'] ?>   </strong>
                  </div>
                  <div class="shop-item">
                    <strong class="shop-item-title"> Hotel <?= $result['idhot1'] ?>   </strong>
                  </div>
                  <div class="shop-item">
                    <strong class="shop-item-title">  type:<?= $result['typereserv'] ?> </strong>
                  </div>
                
                  <div>


                    <?= $result['datereserv'] ?>
                    </div>
                    <div class="shop-item-details">
                        <div>  <span class="shop-item-price">ce reserv comporte <?= $result['nbrjourv'] ?> jour(s). </span>
                          <span class="shop-item-price"><?= $result['accessv'] ?> access au resto et</span>
                           <span class="shop-item-price"><?= $result['nbrexcurv'] ?> excursion(s).</span></div>
                        <span class="shop-item-price"><?= $result['prixreserv'] ?> dt.</span>
 
                        

                    </div>
                </div>
              
            <form action="" method = "POST">
               
                <div class="row">
                    <div class="col-25">
                        <label>Nouvelle date</label>
                    </div>
                    <div class="col-75">
                        <input type="date"  name = "datereserv1" required="" value = "<?= $result['datereserv'] ?>">
                    </div>
                </div>
                    <div class="row">
                    <input type="submit" value="Submit" name = "submit">
                </div>
                   <div><hr></div>
 <!--<script>
    function myFunction2() {
        alert("rfzfrf")
          var test=document.getElementById('nom55').value
          var test2=document.getElementById('prix55').value
           var test3=document.getElementById('type55').value
          var test4=document.getElementById('desc55').value
           var test5=document.getElementById('imh55').value
          var test6=document.getElementById('imh551').value
           var test7=document.getElementById('imh552').value
          var test8=document.getElementById('imh553').value
            var test9=document.getElementById('imh554').value
            alert(test)
 if (test===""||test2===""test3===""||test4===""test5===""||test6===""test7===""||test8===""test9==="") {alert("les deux champs ne doivent pas etre vide")}
    }
</script>-->

    <?php
        }
    }
        else {
            header('Location:showreserv.php');
        }
    
    ?>
	 
    <!-- End Footer -->


    <!-- Bootstrap -->
      </div>
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

</body>

</html>