<?php 
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

if (isset($_POST['name']) && isset($_POST['email'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$body = $_POST['body'];

	require_once "../PHPMailer/PHPMailer.php";
	require_once "../PHPMailer/SMTP.php";
	require_once "../PHPMailer/Exception.php";
	$mail= new PHPMailer();

	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = "oumaimakarmandi1@gmail.com";
	$mail->Password = "mimo1999";
	$mail->Port = 587;
	$mail->SMTPSecure = "ssl";

	$mail->isHTML(true);
	$mail->setFrom($email, $name);
	$mail->addAddress("oumaimakarmandi1@gmail.com");
	$mail->subject = ("$email($subject)");
	$mail->body= $body;

	if ($mail->send()) {
		$status = "success";
		$response ="Email is sent !";
	}
	else 
	{
		$status = "failed";
		$response ="somthing is wrong: " . $mail->ErrorInfo;
	}
	exit(json_encode(array("status" => $status,"response" => $response )));
}




				?>