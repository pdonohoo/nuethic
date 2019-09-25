

<!DOCTYPE html>
<html>
  <head>
  <link rel='stylesheet' type='text/css' href='form.css' />
  </head>
    <header class='header'>
    <div class='header-top'>
    Sales <span style='font-size: 16px'>Up to 50% OFF</span> selected items
    </div>
      <!-- <img class='headerImage' src="/photos/sunglass.jpg" alt='sunglasses' /> -->
    </header>
  <body>
    <div class='collections'>
      <div>
        collections
      </div>
      <div class='color'>
        see collection
      </div>
    </div>
    <div class='product'>
      <div class='glasses'>
        <img class='glassesImage'src='/photos/sunglass1.jpg' />
          The Ones <br>
          <span class='prices'>
          <span class='oldPrice'>$40</span> $34
          </span>
      </div>
      <div class='glasses'>
        <img class='glassesImage' src='/photos/sunglass2.jpg' />
          Aviators <br>
          <span class='prices'>
          <span class='oldPrice'>$40</span> $20
          </span>
      </div>
        <div class='glasses'>
          <img class='glassesImage' src='/photos/sunglass3.jpg' />
          Classic <br>
          <span class='prices'>
          <span class='oldPrice'>$40</span> $34
          </span>
        </div>
      <div class='glasses'>
          <img class='glassesImage' src='/photos/sunglass4.jpg' />
          Classic Black <br>
          <span class='prices'>
          <span class='oldPrice'>$25</span> $22
          </span>
        </div>
      </div>
      <div class='bottomContact'>
        <div class='contact'>
          <h2 class='contactHeader'>Contact Us</h4>
          <p>Send us a message to let us know how we can help. We typically respond within 24 hours.</p>
          
          <p>you can also give us a call at <span class='color'>801-994-6987</span></p>
          
          <p>Or send us an email at <span class='color'>contact@nuethic.com</span></p>
        </div>
        <form class='form' method='post' action='contact.php'>
          
          <span>Name:</span>
          <input type='text' name='name' placeholder='Name'/>
          <span>Email:</span>
          <input type='text' name='email' placeholder='Email'/>
          <span>Phone:</span>
          <input type='text' name='phone' placeholder="Phone Number" />
          <span>What can we do for you:</span>
          <textarea name='message' ></textarea>
          <input class="button" type='submit' name='submit' />
          
        </form>
      </div>
  </body>

     
  
</html>