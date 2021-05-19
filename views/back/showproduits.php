<?php
    require_once 'C:/xampp/htdocs/integration/controller/produitC.php';

    $produitC =  new produitC();

	$produits = $produitC->afficherproduit();

	if (isset($_GET['idpr'])) {
		$produitC->deleteproduit($_GET['idpr']);
		header('Location:showproduits.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../assets/css/style.css">

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
	<a href = "searchproduit.php" class="btn btn-primary shop-item-button">Search</a>
  <div class="container">
  <div class="center">
  <a href = "index2.php" class="btn btn-primary shop-item-button">precommande</a>
  </div>
</div>
			<div class="shop-items">
			<style>
.center {
  margin: 0;
  position: absolute;
  top: 4%;
  left: 90%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>
		<section class="container">
			<h2>LES PRODUITS</h2>
    
         <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col">nom</th>
                  <th scope="col">quantite</th>
                  <th scope="col">categorie</th>
                  <th scope="col">prix</th>
                  <th scope="col">image</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  </tr>
                </thead>
                <?php
					foreach ($produits as $produit) {
				?>  
                <tbody>
                  <tr>
                    <th scope="row">
                    <strong class="shop-item-title"><?= $produit['nomPr'] ?> </strong> 
                      </th>
                    <td>
                    <span class="shop-item-title"><?= $produit['qtestockPr'] ?> </span> 
                    </td>
                    <td>
                    <span class="shop-item-title"><?= $produit['categoriePr'] ?> </span>
                    </td>
                    <td>
                    <span class="shop-item-price"><?= $produit['prixPr'] ?> dt.</span>
                    </td>
                    <td>
                    <img src="/integration/assets/img/<?= $produit['imagePr'] ?>" width = "50" height = "50" class="shop-item-image"> 
                    </td>
                    <td>
                    <a href = "updateproduit.php?idpr=<?= $produit['idpr'] ?>" ><i  class="fas fa-edit"></i></a>
                    </td>
                    <td>
                    <a href = "showproduits.php?idpr=<?= $produit['idpr'] ?>" >  <i class="far fa-trash-alt"></i></a>
                    </td>
                    <td><?php if (($produit['qtestockPr']) < 10)
                      echo '<span style="color:#FF0000;text-align:center;">notice : quantite de produit inferieure a 10 !</span>';  ?></td>
                    
                  </tr>
                 
                
              <?php 
					}
				?>
        </tbody>
              </table>
			</div>
      <br>
      <a href = "pdf2.php" class="btn btn-primary shop-item-button">pdf</a>
      <a href = "addproduit.php" class="btn btn-primary shop-item-button" href = "#">Ajouter</a>


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
<?php
      require_once 'C:/xampp/htdocs/integration/controller/produitC.php';

    $produitC =  new produitC();
  
$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.
    // Replace your-hostname, your-db, your-username, your-password according to your database
    $link = new \PDO(   'mysql:host=localhost;dbname=projetweb;charset=utf8mb4', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                        'root', //'root',
                        '', //'',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
	
    $handle = $link->prepare('select categoriePr as idc1,count(*) as categoriePr from produit group by categoriePr;'); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);           
    foreach($result as $row){
    	
        array_push($dataPoints, array("label"=> $row->idc1, "y"=>$row->categoriePr));
    }
	$link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}
		
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
  CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#f4a460",
                "#ef7b18",
                "#f29648",
                "#de6e10",
                "#f29649"                
                ]);
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	//theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "statistique des categories"
	},
	  colorSet: "greenShades",

	data: [{
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK) ; 
    	   ?>
	 ,mouseover: onMouseover }]
});
chart.render();
 	function onMouseover(e){
		//alert(  e.dataSeries.type+ ", dataPoint { x:" + e.dataPoint.x + ", y: "+ e.dataPoint.y + " }" );   
	}
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 200px; width: 50%; position: absolute;
  left: 400px;
  "></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                              