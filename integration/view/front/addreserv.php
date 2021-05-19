<?php
      require_once 'C:/xampp/htdocs/integration/controller/reservC.php';
    require_once 'C:/xampp/htdocs/integration/entities/reserv.php';
require_once 'C:/xampp/htdocs/integration/controller/hotelC.php';
    require_once 'C:/xampp/htdocs/integration/entities/hotel.php';

    $reservC =  new reservC();
   $hotelC =  new hotelC();

    if (isset($_POST['prixreserv'])  && isset($_POST['typereserv']) && isset($_POST['idh1']) && isset($_POST['idc1']) && isset($_POST['nbrjourv']) && isset($_POST['accessv']) && isset($_POST['nbrexcurv']) && isset($_POST['datereserv'])) {
        $result11 = $hotelC->getHotelById($_POST['idh1']);
            if ($result11 !== false) {
        $reserv = new reserv((int)$_POST['prixreserv'], $_POST['typereserv'], (int)$_POST['idh1'], (int)$_POST['idc1'], (int)$_POST['nbrjourv'], $_POST['accessv'], (int)$_POST['nbrexcurv'],$result11['nomhotel'],  $_POST['datereserv']);
        
        $reservC->addreserv($reserv);

        $testlast=$reservC->getlast();

$lol=$testlast['idreserv'];
        header("Location:/integration/sendmail/envoyer_des_mails.php/?id=$lol");
    }}
?>
<?php
      require_once 'C:/xampp/htdocs/integration/controller/hotelC.php';

    $hotelC =  new hotelC();
  
$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.
    // Replace your-hostname, your-db, your-username, your-password according to your database
    $link = new \PDO(   'mysql:host=localhost;dbname=zarrouk;charset=utf8mb4', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                        'root', //'root',
                        '', //'',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
    
    $handle = $link->prepare('select idhot1 as idc1,count(*) as idh1 from reserv group by idh1;'); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);           
    foreach($result as $row){
        
        array_push($dataPoints, array("label"=> $row->idc1, "y"=>$row->idh1));
    }
    $link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}
        
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="..//integration/assets/css/style.css">
<head>
	 <title>Purple Buzz - Contact Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="/integration/assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/integration/assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="/integration/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="/integration/assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="/integration/assets/css/templatemo.css">
    <!-- Custom CSS -->
   <link rel="stylesheet" href="/integration/assets/css/custom.css">
        <link rel="stylesheet" href="/integration/assets/css/drop.css">
   
<!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
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
        text: "Nos hotels les plus populaires"
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
     <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="index.html">
                <i class='bx bx-buildings bx-sm text-dark'></i>
                <span class="text-dark h4">Purple</span> <span class="text-primary h4">Buzz</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="index.html">Aceuil</a>
                        </li>
                       
                            <!-- Nav -->
                             
             
                            <div class="dropdown">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="about.html">Animaux</a>
                                <div class="dropdown-content">
                                  <a href="contact.html">Animaux</a>
                                  <a href="showreserv.php">Site</a>
                                </div>
                              </div>
                        
    
                              <div class="dropdown">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="about.html">Evenement</a>
                                <div class="dropdown-content">
                                  <a href="contact.html">Ticket</a>
                                  <a href="contact.php">Evenement</a>
                                </div>
                              </div>
                              <div class="dropdown">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="about.html">pack</a>
                                <div class="dropdown-content">
                                  <a href="showpack.php">pack</a>
                                  <a href="showhotel.php">hotel</a>
                                </div>
                              </div>
                              
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="contact.html">Boutique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="contact.html">contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
                    <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a>
                    <a class="nav-link" href="login.php"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
                </div>
            </div>
        </div>
    </nav>
	<a type="button" class="btn btn-primary shop-item-button" href = "showpack.php?>">retour</a>
	<section class="container">
		<h2>New reserv</h2>
       
		<div class="form-container">
            <form action="" method = "POST" onsubmit="myFunction77()">
                  <div class="row">
                    <div class="col-25">
                        <label>client</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "idc1" min="0" required="" >
                    </div>
                </div>
              
                 <div class="row">
                    <div class="col-25">
                        <label>nombre de jour</label>
                    </div>
                    <div class="col-75">
                        <input type="number" id="nhi" name = "nbrjourv" min="0" required=""  onchange="myFunction()">
                    </div>
                </div>
                 <div class="row">
                    <div class="col-25">
                        <label>date</label>
                    </div>
                    <div class="col-75">
                        <input type="date"  name = "datereserv" min="<?php echo date('Y-m-d'); ?>" required="" >
                    </div>
                </div>
                 <div class="row">
                    <div class="col-25">
                        <label>access au resto hotel</label>
                    </div>
                    <div class="col-75">
                       
                         <select id="akk" name="accessv"  onchange="myFunction3()">
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
                        <input type="number" id="exx" name = "nbrexcurv" min="0" required=""  onchange="myFunction1()">
                    </div>
                </div>
                 <div class="row">
                    <div class="col-25">
                        <label>type</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "typereserv"  required="">
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
<select name="idh1" >
     <?php foreach ( $array as $option ) :?>
          <option value="<?php echo $option->idhotel; ?>"><?php echo $option->nomhotel; ?> </option>
     <?php endforeach; ?>       
</select>

<script>
function myFunction() {
     /*      var y = document.getElementById("exx").value*25;
        var x = document.getElementById("nhi").value*100;
  document.getElementById("45").value =    +y + +x;*/
  var z = document.getElementById("akk").value;
         var y = document.getElementById("exx").value*60;
        var x = document.getElementById("nhi").value*150;
      var t=  document.getElementById("nhi").value*40
      var n=  0
        if(z==="avec"){document.getElementById("45").value =+t + +x + +y}
        else{document.getElementById("45").value =+n + +x + +y}
           
 

}
function myFunction1() {
     var z = document.getElementById("akk").value;
         var y = document.getElementById("exx").value*60;
        var x = document.getElementById("nhi").value*150;
      var t=  document.getElementById("nhi").value*40
      var n=  0
        if(z==="avec"){document.getElementById("45").value =+t + +x + +y}
        else{document.getElementById("45").value =+n + +x + +y}
           
}
function myFunction3() {
       var z = document.getElementById("akk").value;
         var y = document.getElementById("exx").value*60;
        var x = document.getElementById("nhi").value*150;
      var t=  document.getElementById("nhi").value*40
      var n=  0
        if(z==="avec"){document.getElementById("45").value =+t + +x + +y}
        else{document.getElementById("45").value =+n + +x + +y}
           
}
</script>
  <div  hidden class="row">
                    <div class="col-25">
                        <label>Price</label>
                    </div>
                    <div  class="col-75">
                        <input type="number" id="45" value="" name = "prixreserv" required="" >
                    </div>
                </div>
    </div>
                </div>
                </div>
                <br>
                <div class="row">
                    <input  type="submit" value="Submit" name = "submit">
                    
                 </div>
            </form>
                <script>
                function myFunction77(){
                    alert("nous vous souhatons un agreable sejour")
                }
            </script>
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
<div id="chartContainer" style="height: 200px; width: 50%;position: absolute;
  left: 600px; top: 100px;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	</section>
	 <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.html">
                        <i class='bx bx-buildings bx-sm text-light'></i>
                        <span class="text-light h5">Purple</span> <span class="text-light h5 semi-bold-600">Buzz</span>
                    </a>
                    <p class="text-light my-lg-4 my-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut.
                    </p>
                    <ul class="list-inline footer-icons light-300">
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="http://facebook.com/">
                                <i class='bx bxl-facebook-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.linkedin.com/">
                                <i class='bx bxl-linkedin-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.whatsapp.com/">
                                <i class='bx bxl-whatsapp-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.flickr.com/">
                                <i class='bx bxl-flickr-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.medium.com/">
                                <i class='bx bxl-medium-square bx-md' ></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h3 class="h4 pb-lg-3 text-light light-300">Our Company</h2>
                        <ul class="list-unstyled text-light light-300">
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.html">Home</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="about.html">About Us</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="work.html">Work</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i></i><a class="text-decoration-none text-light py-1" href="pricing.html">Price</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="contact.html">Contact</a>
                            </li>
                        </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">Our Works</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Branding</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Business</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Marketing</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Social Media</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Digital Solution</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Graphic</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">For Client</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="w-100 bg-primary py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2021 Purple Buzz Company. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-end text-center text-light light-300">
                            Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://templatemo.com/" target="_blank"><strong>TemplateMo</strong></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->


    <!-- Bootstrap -->
    <script src="/integration/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Templatemo -->
    <script src="/integration/assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="/integration/assets/js/custom.js"></script>

    

</body>

</html>