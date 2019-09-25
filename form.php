

<!DOCTYPE html>
<html>
  <head>
  <link rel='stylesheet' type='text/css' href='form.css' />
  </head>
    <header>
    <div class='header-top'>
    Sales up to 50%
    </div>
      <img class='headerImage' src="/photos/sunglass.jpg" alt='sunglasses' />
    </header>
  <body>
    <div class='collections'>
      <div>
        collections
      </div>
      <div>
        see collection
      </div>
    </div>
    <div class='product'>
      <div class='glasses'>
        <img class='glassesImage'src='/photos/sunglass1.jpg' />
          The ones <br>
          35$
      </div>
      <div class='glasses'>
        <img class='glassesImage' src='/photos/sunglass2.jpg' />
          Aviators <br>
          50$
      </div>
        <div class='glasses'>
          <img class='glassesImage' src='/photos/sunglass3.jpg' />
          Classic <br>
          30$
        </div>
      <div class='glasses'>
          <img class='glassesImage' src='/photos/sunglass4.jpg' />
          classic black <br>
          30$
        </div>
      </div>
      <div class='bottomContact'>
        <div class='contact'>
          <h2 class='contactHeader'>Contact Us</h4>
          <p>Send us a message to let us know how we can help. We typically respond within 24 hours.</p>
          
          <p>you can also give us a call at 801-994-6987</p>
          
          <p>Or send us an email at contact@nuethic.com</p>
        </div>
        <form class='form' method='post' action='form.php'>
          Name:
          <input type='text' name='name'/>
          Email:
          <input type='text' name='email'/>
          Phone:
          <input type='text' name='phone'/>
          What can we do for you:
          <textarea name='message' ></textarea>
          <input type='submit' name='submit' />
        </form>
      </div>
  </body>
     <?php

     if (isSet($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];

      $mailTo = 'nicole.westover@hotmail.com';
      $headers = 'From: '.$email;
      $txt = 'You have recieved an email from '.$name.'./n/n'.$message.'and their phone number is'.$phone;

      mail($mailTo, $subject, $txt, $headers );
     }
     ?>
  
</html>