<?php
$ads=$_GET["address"];
$sub=$_GET["subject"];
$con=$_GET["content"];
$name=$_GET["name"];

$res ="address=".$ads."<br> subject=".$sub." <br>content=".$con;

$response = $res;
//output the response
//echo $response;

$mailby="Hi, ".$name.": <br><br> Hello, I am Zhaozheya an web and app developer <br> This mail is sent automaticly if you messege me from my website";
$mailby=$mailby."<br> Thank you very much, I will contact you ASAP <br><br><br>------------------seperate line----------------<br><br>";
$mailby=$mailby.$sub." From ".$name."(".$ads.")<br>";
require("php/phpmailer/class.phpmailer.php"); // path to the PHPMailer class
$mail = new PHPMailer();

$mail->IsSMTP();  // telling the class to use SMTP
$mail->ISHtml(true);
$mail->Mailer = "smtp";
$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 465;
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "zhaozheya@gmail.com"; // SMTP username
$mail->Password = "qwertyuiopZHEYA"; // SMTP password 
 
$mail->From= "zhaozheya@gmail.com";
$mail->FromName =  "Zhaozheya";
$mail->AddAddress($ads);
$mail->AddAddress("zhaozheya@sina.com");
$mail->Subject  = $sub." From ".$name."(".$ads.")";
$mail->Body     = $mailby.$con;
$mail->WordWrap = 50;  
 
if(!$mail->Send()) {
echo ' <br> Message was not sent.';
echo '<br> Mailer error: ' . $mail->ErrorInfo.' ';
} else {
echo 'Message has been sent.';
}
?>
