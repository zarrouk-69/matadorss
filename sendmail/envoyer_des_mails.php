
<?php
 require_once 'C:/xampp/htdocs/integration/controller/reservC.php';
   
    $reservC =  new reservC();
    //$hothot = $pack['idh1'];
       
          
           $id = $_GET['id'];
           
          
            $result11 = $reservC->getreservById($id);
           echo $result11["idreserv"];
//if(isset($_POST['mailform']))
$header="MIME-Version: 1.0\r\n".'Date: '.date('r')."\r\n";
$header.='From:"zarroukhedi69@gmail.com"<zarroukhedi69@gmail.com>'.'Reply-To: "zarroukhedi69@gmail.com"<zarroukhedi69@gmail.com>'.'Return-Path: "zarroukhedi69@gmail.com"<zarroukhedi69@gmail.com>'."\n"; 
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';
$header.='CC: '."\r\n";
$header.='BCC:'."\r\n";
$message.=" ";  
$message.="Hotel :";
$message.=  $result11["idhot1"] ;                  
$message.="type :";
$message.= $result11["typereserv"] ;  
$message.=" ";               
$message.= $result11["datereserv"] ;
$message.=" ";  
$message.=" ce reserv comporte  ";               
$message.= $result11["nbrjourv"] ;               
$message.=" jour(s).  "; 
$message.=" ";                
$message.= $result11["accessv"] ;               
$message.=" jour(s).  "; 
$message.=" ";                
$message.= $result11["nbrexcurv"] ;               
$message.=" excursion(s). "; 
$message.=" ";                
$message.= $result11["prixreserv"] ;               
$message.=" dt. "     ;      
     
   


  ini_set('smtp_port','25');
ini_set('SMTP','smtp.topnet.tn');
//mail("primfxtuto@gmail.com", "Salut tout le monde !", $message, $header);
 mail("naturiousreserve@gmail.com","Cher client !", $message, $header); 
  //header("Location:/integration/views/front/showpack.php");
?>

<form action="" method = "POST" onsubmit="myFunction77()">
