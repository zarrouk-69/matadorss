<?php
    require_once 'C:/xampp/htdocs/integration/controller/hotelC.php';
    require_once 'C:/xampp/htdocs/integration/entities/hotel.php';

    $hotelC =  new hotelC();

    if (isset($_POST['nomhotel']) && isset($_POST['prixhotel'])  && isset($_POST['nbrhotel']) && isset($_POST['deschotel']) && isset($_POST['imagehotel'])&& isset($_POST['imagehotel1'])&& isset($_POST['imagehotel2'])&& isset($_POST['imagehotel3'])&& isset($_POST['imagehotel4'])) {
        $hotel = new hotel($_POST['nomhotel'], (int)$_POST['prixhotel'], (int)$_POST['nbrhotel'], $_POST['deschotel'], $_POST['imagehotel'], $_POST['imagehotel1'], $_POST['imagehotel2'], $_POST['imagehotel3'], $_POST['imagehotel4']);
        
        $hotelC->addhotel($hotel);

        header('Location:showhotel.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	
<!--<link rel="icon" href="/integration/assets1/img/brand/favicon.png" type="image/png">
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
              <a class="nav-link" href="showrec.php">
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
	<a type="button" class="btn btn-primary shop-item-button" href = "showhotel.php?>">retour</a>
	<section class="container">
		<h2>New hotel</h2>
        <a href = "showhotel.php" class="btn btn-primary shop-item-button">All hotels</a>
		<div class="form-container">
            <form action="" method = "POST" onsubmit="myFunction()">
                <div class="row">
                    <div class="col-25">                
                        <label>nom: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="nom55" name = "nomhotel" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Price</label>
                    </div>
                    <div class="col-75">
                        <input type="number" id="prix55" name = "prixhotel" min="0" required="" >
                    </div>
                </div>
                 <div class="row">
                    <div class="col-25">
                        <label>nbretoile</label>
                    </div>
                    <div class="col-75">
                        <input type="number" id="nbr55" name = "nbrhotel" min="0" max="6" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>description</label>
                    </div>
                    <div class="col-75">
                        <textarea name = "deschotel" id="desc55" cols="30" rows="5" required=""></textarea>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Image</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" id="imh55" name = "imagehotel" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Image1</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" id="imh551" name = "imagehotel1" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Image2</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" id="imh552" name = "imagehotel2" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Image3</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" id="imh553" name = "imagehotel3" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Image4</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" id="imh554" name = "imagehotel4" required="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <input  type="submit" value="Submit" name = "submit">
                    
                 </div>
            </form>
		</div>
      <!--  <script>
    function myFunction() {
          var test=document.getElementById('nom55').value
          var test2=document.getElementById('prix55').value
           var test3=document.getElementById('nbr55').value
          var test4=document.getElementById('desc55').value
           var test5=document.getElementById('imh55').value
          var test6=document.getElementById('imh551').value
           var test7=document.getElementById('imh552').value
          var test8=document.getElementById('imh553').value
            var test9=document.getElementById('imh554').value
 if (test===""||test2===""test3===""||test4===""test5===""||test6===""test7===""||test8===""test9==="") {alert("les deux champs ne doivent pas etre vide")}
    }
</script>-->
	</section>

    <!-- End Footer -->


    <!-- Bootstrap -->
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