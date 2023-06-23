<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

if(isset($_POST["Send"])){

    $FullName =  $_POST["name"];
    $EmailId = $_POST["email-id"];
    print_r($EmailId);
    $PhoneNumber = $_POST["phone-number"];
    $Subject = $_POST["subject"];
    $Message = $_POST["Message"];

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "amrishsdckap@gmail.com";
    $mail->Password = "vujjzfvyavodymix";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            
    $mail->Port = 587;

    $mail->setFrom("parasuramanadckap@gmail.com","mailer");

    $mail->addAddress("amrishsdckap@gmail.com","owner");

    $mail->isHTML(true);                                  
    $mail->Subject = "$Subject";
    $mail->Body = "<p>Name:$FullName <br> PhoneNumber : $PhoneNumber </p><p>$Message</p>";
  
    $mail->send();
    echo "<script>alert('okay')</script>";
    header("location:/");
}




