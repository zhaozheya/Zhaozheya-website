<?php  

require("class.phpmailer.php"); // path to the PHPMailer class
$mail = new PHPMailer();

$mail->IsSMTP();  // telling the class to use SMTP
$mail->Mailer = "smtp";
$mail->Host = "smtp.sina.com";
//$mail->Port = 465;
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "zhaozheya@sina.com"; // SMTP username
$mail->Password = "qwertyuiopZHEYA"; // SMTP password 
 
$mail->From= "zhaozheya@gmail.com";
$mail->FromName =  "Zhaozheya";
$mail->AddAddress($_POST["address"]);
$mail->AddAddress("zhaozheya@gmail.com");
$mail->Subject  = $_POST["subject"]." From ".$_POST["address"];
$mail->Body     = $_POST["content"];
$mail->WordWrap = 50;  
 
if(!$mail->Send()) {
echo 'Message was not sent.';
echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent.';
}


?>