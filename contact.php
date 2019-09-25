<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
     //Server settings
     $mail->isSMTP();                                            // Set mailer to use SMTP
     $mail->Host       = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
     $mail->Username   = 'apikey';                     // SMTP username
     $mail->Password   = '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';                               // SMTP password
     $mail->SMTPSecure = 'tls';         // Enable TLS encryption, `PHPMailer::ENCRYPTION_SMTPS` also accepted
     $mail->Port       = 587;                                    // TCP port to connect to
 
     //Recipients
     $mail->setFrom($_POST['email']);
     $mail->addAddress('preston.s.donohoo@icloud.com');               // Name is optional
  
     // Content
     $mail->isHTML(true);                                  // Set email format to HTML
     $mail->Subject = 'Here is the subject';
     $mail->Body    = $_POST['message'];
 
     $mail->send();
     echo 'Message has been sent';
 } catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }

     // if (isset($_POST['submit'])){
     //  $name = $_POST['name'];
     //  $email = $_POST['email'];
     //  $phone = $_POST['phone'];
     //  $message = $_POST['message'];
     //  $subject = 'This is a test';

     //  $mailTo = 'preston.s.donohoo@icloud.com';
     //  $headers = 'From: '.$email;
     //  $txt = 'You have recieved an email from '.$name.'./n/n'.$message.'and their phone number is'.$phone;

     //  mail($mailTo, $subject, $txt, $headers );
     //  header("Location: index.php?mailsent");
     // } 

     ?>