<?php
    require_once 'C:/xampp/htdocs/projet/controller/produitC.php';
    require_once 'C:/xampp/htdocs/projet//entities/produit.php';

    $produitC =  new produitC();

    if (isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['image'])&& isset($_POST['categorie'])&& isset($_POST['qtestock'])) {
        $produit = new produit($_POST['nom'], (float)$_POST['prix'], $_POST['image'], $_POST['categorie'], (int)$_POST['qtestock']);
        
        $produitC->updateproduit($produit,$_GET['idpr']);
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
  <link rel="icon" href="/projet/assets1/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/projet/assets1/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/projet/assets1/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="/projet/assets1/css/argon.css?v=1.2.0" type="text/css">

</head>

<body>
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="/projet/assets1/img/brand/logo.png" class="navbar-brand-img" alt="...">
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
              <a class="nav-link" href="/projet/view/back/showsponsor.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Icons</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Google</span>
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
    <a href = "searchproduit.php" class="btn btn-primary shop-item-button">Search</a>
    <?php
        if (isset($_GET['idpr'])) {
            $result = $produitC->getproduitById($_GET['idpr']);
			if ($result !== false) {
    ?>
	<section class="container">
		<h2>Update produit</h2>
        <a href = "showproduits.php" class="btn btn-primary shop-item-button">All produit</a>
		<div class="form-container">
            <form action="" method = "POST">
                <div class="row">
                    <div class="col-25">                
                        <label>nom : </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "nom" value = "<?= $result['nom'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Price:</label>
                    </div>
                    <div class="col-75">
                        <input type="number" min=0 name = "prix" value = "<?= $result['prix']  ?> ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>categ :</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "categorie" value = "<?= $result['categorie'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>quant :</label>
                    </div>
                    <div class="col-75">
                        <input type="number" min=0 name = "qtestock" value = "<?= $result['qtestock'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Image :</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" name = "image" value = "<?= $result['image'] ?>">
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Submit" name = "submit">
                </div>
            </form>
		</div>
	</section>
    </div>

    <?php
        }
    }
        else {
            header('Location:showproduits.php');
        }
    
    ?>

<script src="../assets/js/script.js"></script>
<!-- Argon Scripts -->
  <!-- Core -->
  <script src="/projet/assets1/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/projet/assets1/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/projet/assets1/vendor/js-cookie/js.cookie.js"></script>
  <script src="/projet/assets1/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="/projet/assets1/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="/projet/assets1/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="/projet/assets1/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="/projet/assets1/js/argon.js?v=1.2.0"></script>

</body>

</html>