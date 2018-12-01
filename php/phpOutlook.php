<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';
include '../includes/dbHelper.php';

    $account="fredparagon0078@outlook.com";
    $password="bestbulk123";
    $to=$_POST['email'];
    $from="fredparagon0078@outlook.com";
    $from_name="Paragon Admin";
    
    $subject="Paragon FileLoader: New Password";
    
    $connection = dbConnect();
    
    $sql = sprintf("Select Email FROM user_and_password WHERE Email = '%s'",
           $connection->real_escape_string($_POST["email"]));
    $result = $connection->query($sql);
    
    $sql2 = sprintf("Select Username,Password FROM user_and_password WHERE Email = '%s'",
          $connection->real_escape_string($_POST["email"]));
    $result2 = $connection->query($sql2);
    $row = mysqli_fetch_array($result2);
    
    $random = rand(999, 99999);
    
    $password_hash = password_hash($random, PASSWORD_DEFAULT);
    $sql3 = sprintf("UPDATE `user_and_password` SET `Password` = '%s' WHERE Email = '%s'",
                        $connection->real_escape_string($password_hash),
                        $connection->real_escape_string($_POST["email"]));
    $result3 = $connection->query($sql3);
    
    $msg = "Username:  " . $row[0] .
           "</br>Password:  ".$random;
    
    if (isset($_POST["email"]))
    {   
        
        if ($result->num_rows >= 1) 
        { 
            $mail = new PHPMailer();
            $mail->isSMTP();
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
             $message1= "Mailer Error: " . $mail->ErrorInfo;
            }
            else{
             $message1= "E-Mail successfully sent!";
            }
          
        } 
        else
        { 
          $message1= "Not a valid Email!";
        }


    }



?>