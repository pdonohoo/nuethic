<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

try {

     //Server settings
     $mail->isSMTP();                                            // Set mailer to use SMTP
     $mail->Host       = getenv('SERVER_ENV');  // Specify main and backup SMTP servers
     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
     $mail->Username   = getenv('USERNAME_ENV');                     // SMTP username
     $mail->Password   = getenv('PASSWORD_ENV');                               // SMTP password
     $mail->SMTPSecure = 'tls';         // Enable TLS encryption, `PHPMailer::ENCRYPTION_SMTPS` also accepted
     $mail->Port       = 587;                                    // TCP port to connect to
 
     //Recipients
     $mail->setFrom($_POST['email']);
     $mail->addAddress('preston.s.donohoo@icloud.com');               // Name is optional
  
     // Content
     $mail->isHTML(true);                                  // Set email format to HTML
     $mail->Subject = 'Here is the subject';
     $mail->Body    =   $_POST['name']; $_POST['phone']; $_POST['message']; 
 
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