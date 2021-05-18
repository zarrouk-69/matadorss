<?php
   require_once 'C:/xampp/htdocs/integration/controller/sponsorC.php';

    $sponsorC =  new sponsorC();

	$sponsors = $sponsorC->afficherSponsor();

	if (isset($_GET['idS'])) {
		$sponsorC->deleteSponsor($_GET['idS']);
		header('Location:showsponsor.php');
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
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
	<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: inline;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>	

  


</head>

<body>
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
              <a class="nav-link active" href="/integration/views/back/index.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/integration/views/back/showsponsor.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Sponsors</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/integration/views/back/stat2.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Statistiques</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/integration/view/back/showdon.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Don</span>
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
	<a href = "searchsponsor.php" class="btn btn-primary shop-item-button">Search</a>
		<section class="container">
			<h2>SPONSORS</h2>
			<a href = "addsponsor.php" class="btn btn-primary shop-item-button" href = "#">Ajouter</a>
			<a href = "triersponsor.php" class="btn btn-primary shop-item-button" href = "#">Trier</a>
			<div id="wl" class="shop-items">
				<?php
					foreach ($sponsors as $sponsor) {
				?>
				
				<div  class="shop-item">
					<div class="dropdown">
					<a  ><img src="/integration/assets/img//<?= $sponsor['logoS'] ?>" width="400" height="200"> </a>
					<div class="dropdown-content">
						<strong class="shop-item-title">Nom: <?= $sponsor['nomS'] ?></strong>
						<span class="shop-item-title">Numero: <?= $sponsor['numtlph'] ?> </span>
						<span class="shop-item-title">Date Debut: <?= $sponsor['dateD'] ?> </span>
						<span class="shop-item-title">Date Fin : <?= $sponsor['dateF'] ?> </span>
						<span class="shop-item-title">Description: <?= $sponsor['descr'] ?> </span>
					</div>
				</div>
				
						
                          
						<a type="button" class="btn btn-primary shop-item-button" href = "updatesponsor.php?idS=<?= $sponsor['idS'] ?>">Modifier</a>
						<a type="button" class="btn btn-primary shop-item-button" href = "showsponsor.php?idS=<?= $sponsor['idS'] ?>">Supprimer</a>

					
					</div>
					
				<lr>

				<?php 
					}
				?>
			</div>
			<!--<div id="wl1" class="shop-items">
				<?php
					foreach ($sponsors as $sponsor) {
				?>

                     <div>
						<a type="button" onclick="myFunction()" ><img src="../images/<?= $sponsor['logoS'] ?>" width="400" height="200"> </a>
						<button onclick="myFunction()"> test</button>
						
					</div>
					<?php 
					}
				?>
					</div>
			<script>
							wl.style.display = "none";
function myFunction() {
  var x = document.getElementById("wl");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>-->
		</section>
 </lr>
</div>
</section>
</div>

  <!-- Argon Scripts -->
  <!-- Core -->
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