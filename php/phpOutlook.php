<?php

$account="email_address@gmail.com";
$password="accountpassword";
$to="mail@subinsb.com";
$from="vishal@vishal.com";
$from_name="Vishal G.V";
$msg="<strong>This is a bold text.</strong>"; // HTML message
$subject="HTML message";


include("phpMailer.php");


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.live.com";
$mail->SMTPAuth= true;
$mail->Port = 587;
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'tls';
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);


if(!$mail->send()){
 echo "Mailer Error: " . $mail->ErrorInfo;
}else{
 echo "E-Mail has been sent";
}

?>