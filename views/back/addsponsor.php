<?php
   // require_once 'C:/xampp/htdocs/integration/controller/sponsorC.php';
   // require_once 'C:/xampp/htdocs/integration/entities/sponsor.php';
    require_once('../.././controller/sponsorC.php');  
    require_once('../.././entities/sponsor.php');  

    $sponsorC =  new sponsorC();
    
    if (isset($_POST['nomS']) && isset($_POST['numtlph']) && isset($_POST['dateD']) && isset($_POST['dateF']) && isset($_POST['desc'])&& isset($_POST['logoS'])) {
$sponsor = new sponsor($_POST['nomS'],(int) $_POST['numtlph'], $_POST['dateD'], $_POST['dateF'], $_POST['desc'],$_POST['logoS']);
if( $_POST['dateD']> $_POST['dateF'])
{
 ?>
 <script>
 alert("il faut choisir une date de debut inf   a la date fin")
 </script>
 <?php
}
else
{
 $sponsorC->addSponsor($sponsor);
 ?>
 <script>
 alert("votre sponsor est ajouté");

 </script>

 <?php
  

}

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
    <a href = "searchsponsor.php" class="btn btn-primary shop-item-button">Search</a>
	<section class="container">
        <center>
		<h2>New Sponsor</h2>
        <a href = "showsponsor.php" class="btn btn-primary shop-item-button">All Sponsors</a>
		<div class="form-container">
            <form action="" method = "POST"  >
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

             <script > 
             


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