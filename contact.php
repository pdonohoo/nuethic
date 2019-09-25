<?php

     if (isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];
      $subject = 'This is a test';

      $mailTo = 'preston.s.donohoo@icloud.com';
      $headers = 'From: '.$email;
      $txt = 'You have recieved an email from '.$name.'./n/n'.$message.'and their phone number is'.$phone;

      mail($mailTo, $subject, $txt, $headers );
      header("Location: index.php?mailsent");
     } 

     ?>