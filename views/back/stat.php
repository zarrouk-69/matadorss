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
		text: "PHP Column Chart from Database"
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
  left: 50px;
  "></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                              