<?php
    require_once 'C:/xampp/htdocs/integration/controller/packC.php';
    require_once 'C:/xampp/htdocs/integration/entities/pack.php';
require_once 'C:/xampp/htdocs/integration/controller/hotelC.php';
    require_once 'C:/xampp/htdocs/integration/entities/hotel.php';
    $packC =  new packC();
  $hotelC =  new hotelC();
    if (isset($_POST['nompack']) && isset($_POST['prixpack'])  && isset($_POST['typepack']) && isset($_POST['descpack']) && isset($_POST['imagepack']) && isset($_POST['idh1']) && isset($_POST['nbrjour']) && isset($_POST['access']) && isset($_POST['nbrexcur'])) {
 $result11 = $hotelC->getHotelById($_POST['idh1']);
            if ($result11 !== false) {
        $pack = new pack($_POST['nompack'], (int)$_POST['prixpack'], $_POST['typepack'], $_POST['descpack'], $_POST['imagepack'], (int)$_POST['idh1'], (int)$_POST['nbrjour'], $_POST['access'], (int)$_POST['nbrexcur'],$result11['nomhotel']);
        
        $packC->addpack($pack);

        header('Location:showpack.php');
    }}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="..//integration/assets/css/style.css">
<head>
	<link rel="icon" href="/integration/assets1/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/integration/assets1/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/integration/assets1/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="/integration/assets1/css/argon.css?v=1.2.0" type="text/css">



-->

</head>

<body>
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
	<a type="button" class="btn btn-primary shop-item-button" href = "showpack.php?>">retour</a>
	<section class="container">
		<h2>New pack</h2>
        <a href = "showpack.php" class="btn btn-primary shop-item-button">All packs</a>
		<div class="form-container">
            <form action="" method = "POST" >
                <div class="row">
                    <div class="col-25">                
                        <label>nom: </label>
                    </div>
                    <div class="col-75">
                        <input type="text"  name = "nompack" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Price</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "prixpack" min="0" required="" >
                    </div>
                </div>
                 <div class="row">
                    <div class="col-25">
                        <label>nombre de jour</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "nbrjour" min="0" required="" >
                    </div>
                </div>
                 <div class="row">
                    <div class="col-25">
                        <label>access au resto hotel</label>
                    </div>
                    <div class="col-75">
                       
                         <select name="access">
        <option value="avec">avec</option>
        <option value="sans">sans</option>
        
    </select>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-25">
                        <label>nombre d'excursion</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "nbrexcur" min="0" required="" >
                    </div>
                </div>
                 <div class="row">
                    <div class="col-25">
                        <label>type</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "typepack"  required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>description</label>
                    </div>
                    <div class="col-75">
                        <textarea name = "descpack"  cols="30" rows="5" required=""></textarea>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Image</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" name = "imagepack" required="">
                    </div>
                </div>

                   <?php
require_once('C:/xampp/htdocs/integration/config.php');
$mysqli = new mysqli('localhost', 'root', '' ,'zarrouk');
if($mysqli->connect_error){
    die('Connect-Error (' . $mysqli->connect_error . ') '
        . $mysqli->connect_error);
}
$query = $mysqli->query( "SELECT * FROM hotel");
while ($array[] = $query->fetch_object());
    # code...
 array_pop ( $array );
?>
 <div class="row">
                   <div class="col-25">  
                   
                             <label>hotel</label>
                    </div>
                     <div class="col-75">
<select id="mySelect"  name="idh1">
     <?php foreach ( $array as $option ) :?>
          <option value="<?php echo $option->idhotel; ?>"><?php echo $option->nomhotel; ?> </option>
      <?php endforeach; ?>  
</select>
  
    </div>
                </div>
             
                <br>
                <div class="row">
                
                    <input  type="submit" value="Submit" name = "submit">
                
                    </div>
            </form>
		</div>
        </div>
      <!--  <script>
    function myFunction() {
          var test=document.getElementById('nom55').value
          var test2=document.getElementById('prix55').value
           var test3=document.getElementById('type55').value
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