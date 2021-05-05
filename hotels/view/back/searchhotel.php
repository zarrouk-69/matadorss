<?php
    require_once 'C:/xampp/htdocs/hotels/controller/hotelC.php';

    $hotelC =  new hotelC();
   


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
<a type="button" class="btn btn-primary shop-item-button" href = "showhotel.php?>">retour</a>
	<section class="container">
		<h2></h2>
		<div class="form-container">
            <form action="" method = 'POST' onsubmit="myFunction()">
                <div class="row">
                    <div class="col-25">                
                        <label>Search nom: </label>
                    </div>
                    <div class="col-75">
                        <input  type = "text" id="nomh5" name = 'hotel'>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">                
                        <label>Search etoile: </label>
                    </div>
                    <div class="col-75">
                        <input  type = "number"  id="nbr5" name = 'etoile' min="0" max="6" >
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
          var test2=document.getElementById('nbr5').value
 if (test===""&&test2==="") {alert("les deux champs ne doivent pas etre vide")}
    }
</script>
	<?php
		if (isset($_POST['hotel']) && isset($_POST['search'])){
			$result = $hotelC->afficherHotelnom($_POST['hotel']);
			$results = $hotelC->afficherHotelnom($_POST['hotel']);
			if ($result !== false) {
	?>
		<section class="container">
			<h2>hotel</h2>
			<a href = "showhotel.php" class="btn btn-primary shop-item-button">All hotels</a>
			<div class="shop-items">
				<?php
					foreach ($results as $hotel) {
				?>
				                <div class="shop-item">
                    <strong class="shop-item-title"> <?= $hotel['nomhotel'] ?> <?= $hotel['nbrhotel'] ?> etoiles </strong>
                  </div>
                  <div>
<div class="dropdown2">
  <a  href = "showimage1.php?idhotel=<?= $hotel['idhotel'] ?>"><img src="/hotels/assets/img/<?= $hotel['imagehotel'] ?>" alt="Cinque Terre" width="200" height="200"></a>
  <div class="dropdown2-content">
  <a><img src="/hotels/assets/img/<?= $hotel['imagehotel1'] ?>" alt="Cinque Terre" width="300" height="200"></a>
 <a><img src="/hotels/assets/img/<?= $hotel['imagehotel2'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/hotels/assets/img/<?= $hotel['imagehotel3'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/hotels/assets/img/<?= $hotel['imagehotel4'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <div class="desc">Beautiful</div>
  </div>
</div>




                    <?= $hotel['deschotel'] ?>
                    </div>
                    <div class="shop-item-details">
                        <span class="shop-item-price"><?= $hotel['prixhotel'] ?> dt.</span>
                        <a type="button" class="btn btn-primary shop-item-button" href = "updatehotel.php?idhotel=<?= $hotel['idhotel'] ?>">Modifier</a>
                        <a type="button" class="btn btn-primary shop-item-button" href = "showhotel.php?idhotel=<?= $hotel['idhotel'] ?>">Supprimer</a>
                    </div>
                
                <div><hr></div>
				<?php 
					}
				?>
				</div>
			</div>
		</section>
	<?php
		}
		
	
		elseif (isset($_POST['etoile']) && isset($_POST['search'])){
			$result = $hotelC->gethotelByetoile($_POST['etoile']);
			$results = $hotelC->afficherHotelnbr($_POST['etoile']);
			if ($result !== false) {
	?>
		<section class="container">
			<h2>hotel</h2>
			<a href = "showhotel.php" class="btn btn-primary shop-item-button">All hotels</a>
			<div class="shop-items">
				
				<?php
					foreach ($results as $hotel) {
				?>
				                <div class="shop-item">
                    <strong class="shop-item-title"> <?= $hotel['nomhotel'] ?> <?= $hotel['nbrhotel'] ?> etoiles </strong>
                  </div>
                  <div>
<div class="dropdown2">
  <a  href = "showimage1.php?idhotel=<?= $hotel['idhotel'] ?>"><img src="/hotels/assets/img/<?= $hotel['imagehotel'] ?>" alt="Cinque Terre" width="200" height="200"></a>
  <div class="dropdown2-content">
  <a><img src="/hotels/assets/img/<?= $hotel['imagehotel1'] ?>" alt="Cinque Terre" width="300" height="200"></a>
 <a><img src="/hotels/assets/img/<?= $hotel['imagehotel2'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/hotels/assets/img/<?= $hotel['imagehotel3'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <a><img src="/hotels/assets/img/<?= $hotel['imagehotel4'] ?>" alt="Cinque Terre" width="300" height="200"></a>
  <div class="desc">Beautiful</div>
  </div>
</div>




                    <?= $hotel['deschotel'] ?>
                    </div>
                    <div class="shop-item-details">
                        <span class="shop-item-price"><?= $hotel['prixhotel'] ?> dt.</span>
                        <a type="button" class="btn btn-primary shop-item-button" href = "updatehotel.php?idhotel=<?= $hotel['idhotel'] ?>">Modifier</a>
                        <a type="button" class="btn btn-primary shop-item-button" href = "showhotel.php?idhotel=<?= $hotel['idhotel'] ?>">Supprimer</a>
                    </div>
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