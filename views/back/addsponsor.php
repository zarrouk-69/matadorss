<?php
    require_once 'C:/xampp/htdocs/integration/controller/sponsorC.php';
    require_once 'C:/xampp/htdocs/integration/entities/sponsor.php';

    $sponsorC =  new sponsorC();

    if (isset($_POST['nomS']) && isset($_POST['numtlph']) && isset($_POST['dateD']) && isset($_POST['dateF']) && isset($_POST['desc'])&& isset($_POST['logoS'])) {
        $sponsor = new sponsor($_POST['nomS'],(int) $_POST['numtlph'], $_POST['dateD'], $_POST['dateF'], $_POST['desc'],$_POST['logoS']);
        
        $sponsorC->addSponsor($sponsor);

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
        <center>
		<h2>New Sponsor</h2>
        <a href = "showsponsor.php" class="btn btn-primary shop-item-button">All Sponsors</a>
		<div class="form-container">
            <form action="" method = "POST" onsubmit="myFunction()" >
                <div class="row">
                    <div class="col-25">                
                        <label>Nom   :  </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "nomS" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Num :   </label>
                    </div>
                    <div class="col-75">
                        <input type="telephone" pattern="[0-9]{8}" name = "numtlph"  required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Deb     : </label>
                    </div>
                    <div class="col-75">
                        <input type = "date" name = "dateD" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Fin      :  </label>
                    </div>
                    <div class="col-75">
                        <input type = "date" name = "dateF" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Description    :</label>
                    </div>
                    <div class="col-75">
                        
                        <textarea rows="4" cols="50" name="desc" > </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Logo:</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" name = "logoS" required="">
                    </div>
                </div>
                <br>
                <div class="row"  >
                    
                    <input type="submit" value="Submit" name = "submit"  >

                </div>
            </form>

             <script > function myFunction()
{
    alert("votre sponsor est ajouté")
    var test=document.getElementById('datev22').value
    alert(test)
}

        </script>
        </center>
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