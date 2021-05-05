<?php
    require_once 'C:/xampp/htdocs/hotels/controller/packC.php';
      require_once 'C:/xampp/htdocs/hotels/controller/hotelC.php';

    $hotelC =  new hotelC();
    $hotels = $hotelC->afficherhotel();

    $packC =  new packC();
   


?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="..//hotels/assets/css/style.css">
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
                        <input  type = "text" id="nomh5" name = 'pack'>
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
                    <input type = "submit" value = "Search" name ="search">
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
  <a  href = "showimage1.php?idpack=<?= $pack['idpack'] ?>"><img src="/hotels/assets/img/<?= $pack['imagepack'] ?>" alt="Cinque Terre" width="200" height="200"></a>
  <div class="dropdown2-content">
      <?php
        $hothot = $pack['idh1'];
       
        //if (isset($_GET['idh1'])) {
            $result11 = $hotelC->getHotelById($hothot);
            if ($result11 !== false) {
    ?>
 <a><img src="/hotels/assets/img/<?= $result11['imagehotel1'] ?>" alt="Cinque Terre" width="300" height="200"></a>
 <a><img src="/hotels/assets/img/<?= $result11['imagehotel2'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/hotels/assets/img/<?= $result11['imagehotel3'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/hotels/assets/img/<?= $result11['imagehotel4'] ?>" alt="Cinque Terre" width="300" height="200"></a>
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
                        <a type="button" class="btn btn-primary shop-item-button" href = "updatepack.php?idpack=<?= $pack['idpack'] ?>">Modifier</a>
                        <a type="button" class="btn btn-primary shop-item-button" href = "showpack.php?idpack=<?= $pack['idpack'] ?>">Supprimer</a>
              
                <div><hr></div>
				<?php 
					}
				?>
				      </div>
                </div>
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
  <a  href = "showimage1.php?idpack=<?= $pack['idpack'] ?>"><img src="/hotels/assets/img/<?= $pack['imagepack'] ?>" alt="Cinque Terre" width="200" height="200"></a>
  <div class="dropdown2-content">
     <?php
        $hothot = $pack['idh1'];
       
        //if (isset($_GET['idh1'])) {
            $result11 = $hotelC->getHotelById($hothot);
            if ($result11 !== false) {
    ?>
 <a><img src="/hotels/assets/img/<?= $result11['imagehotel1'] ?>" alt="Cinque Terre" width="300" height="200"></a>
 <a><img src="/hotels/assets/img/<?= $result11['imagehotel2'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/hotels/assets/img/<?= $result11['imagehotel3'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/hotels/assets/img/<?= $result11['imagehotel4'] ?>" alt="Cinque Terre" width="300" height="200"></a>
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
                        <a type="button" class="btn btn-primary shop-item-button" href = "updatepack.php?idpack=<?= $pack['idpack'] ?>">Modifier</a>
                        <a type="button" class="btn btn-primary shop-item-button" href = "showpack.php?idpack=<?= $pack['idpack'] ?>">Supprimer</a>
                    </div>
           
                <div><hr></div>
				<?php 
					}
				?>
				 
	
		</section>
	<?php
		}
		else {
			echo "<div> No results found!!! </div>";
		}
	}}
	?>
      </div>
	   </div>
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