<?php
//if(isset($_POST['mailform']))
$header="MIME-Version: 1.0\r\n".'Date: '.date('r')."\r\n";
$header.='From:"oumaima.com"<oumaimakarmandi1@gmail.com>'.'Reply-To: "oumaima.com"<oumaimakarmandi1@gmail.com>'.'Return-Path: "oumaima.com"<oumaimakarmandi1@gmail.com>'."\n"; 
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';
$header.='CC: '."\r\n";
$header.='BCC:'."\r\n";
$message.='
<html>
	<body>
		<div align="center">
			
			<br />
			<img src="/Sendmail/album6.jpg" alt="A">
			<br/>
			Merci pour votre don  !
			<br />
			
		</div>
	</body>
</html>
';
ini_set('smtp_port','25');
ini_set('SMTP','smtp.topnet.tn');
//mail("primfxtuto@gmail.com", "Salut tout le monde !", $message, $header);
 mail("oumaimakarmandi1@gmail.com","Cher client !", $message, $header); 
header('Location:/integration/view/front/showdon.php');
?>

<form action="" method = "POST" onsubmit="myFunction77()">
