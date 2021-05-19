
<?php
 require_once 'C:/xampp/htdocs/integration/controller/reservC.php';
   
    $reservC =  new reservC();
    //$hothot = $pack['idh1'];
       
          
           $id = $_GET['id'];
            echo $id;
            $result11 = $reservC->getreservById($id);
           echo $result11["idreserv"];
//if(isset($_POST['mailform']))
$header="MIME-Version: 1.0\r\n".'Date: '.date('r')."\r\n";
$header.='From:"naturiousreserve@gmail.com"<naturiousreserve@gmail.com>'.'Reply-To: "naturiousreserve@gmail.com"<naturiousreserve@gmail.com>'.'Return-Path: "naturiousreserve@gmail.com"<naturiousreserve@gmail.com>'."\n"; 
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';
$header.='CC: '."\r\n";
$header.='BCC:'."\r\n";
$message.=/*"
<html>
	<body>
		<div align="center">
			
			<br />
			    <div class="shop-item">
                    <strong class="shop-item-title"> <?=  $result11["idreserv"] ?>   </strong>
                  </div>
                  <div class="shop-item">
                    <strong class="shop-item-title"> Hotel <?= $result11["idhot1"] ?>   </strong>
                  </div>
                  <div class="shop-item">
                    <strong class="shop-item-title">  type:<?= $result11["typereserv"] ?> </strong>
                  </div>
                
                  <div>
  

                    <?= $result11["datereserv"] ?>
                    </div>
                    <div class="shop-item-details">
                        <div>  <span class="shop-item-price">ce reserv comporte <?= $result11["nbrjourv"] ?> jour(s). </span>
                          <span class="shop-item-price"><?= $result11["accessv"] ?> access au resto et</span>
                           <span class="shop-item-price"><?= $result11["nbrexcurv"] ?> excursion(s).</span></div>
                        <span class="shop-item-price"><?= $result11["prixreserv"] ?> dt.</span>
			<br/>
			Merci pour votre choix  !
			<br />
			
		</div>
	</body>
</html>
"*/"id : ".$result11['idreserv'] ." \n "
."hotel : ".$result11['idhot1'] ." \n "
."type : ".$result11['typereserv'] ." \n "
."date : ".$result11['datereserv'] ." \n "
."nbr jour : ".$result11['nbrjourv'] ." \n "
."acces au resto : ".$result11['accessv'] ." \n "
."excursion : ".$result11['nbrexcurv'] ." \n "
."prix : ".$result11['prixreserv'] ." \n "
."Version : ".$result11['idhot1'] ." \n ";
    ini_set('SMTP', 'smtp.topnet.tn');
ini_set('smtp_port','25');
//mail("primfxtuto@gmail.com", "Salut tout le monde !", $message, $header);
 mail("naturiousreserve@gmail.com","Cher client !", $message, $header); 
//header('Location:/ateleir8/view/back/showdon.php');
  //header("Location:/integration/views/front/showpack.php/?id=$lol");
?>

<form action="" method = "POST" onsubmit="myFunction77()">
