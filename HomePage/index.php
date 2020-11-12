<?php
  include_once 'header.php';
 ?>
  <!-- HOME -->
  <div class="banner">
    <img src="http://laurenbugelli.com/Imgs/homePhoto.jpg">
    <div class="content">
      <?php
        if(isset($_SESSION["useruid"])){
          echo "  <h2>Hello, " . $_SESSION["useruid"] . ", </h2>";
          echo "<p>Thank you for loging in and welcome, this is a page about...</p>";
        }
       ?>
      <h2>Lauren Bugelli</h2>
      <?php
        if(isset($_SESSION["useruid"])){
          echo "<p>Who is...</p>";
        }
       ?>
      <p>Currently finishing her final semester at the University of Redlands,
        Lauren is an amateure artist who is excited to leave her mark on the world.
        Or better yet, your living room.</p>
    </div>
  </div>
  <!--END HOME -->

  <!-- ABOUT AREA -->
  <section id = "about" class="about">

  <div class="contentBx">
    <h2 class="heading">About The Artist</h2>
    <p class="text">Lauren is a 25 year old student, who serves and bartends in her small town.<br><br>Today she is pursuing a degree in Computer Science, merging her two loves: computers and art.
      She hopes to one day support herself with her passion for creativity through web design.
    </p>
  </div>
  <div class="galleryBx">
    <h2 class="heading">Current Project</h2>
    <a style="text-decoration:none" href = "http://laurenbugelli.com/CurrProjPage/currProj.php">
        <button class="curProjButton"></button>
    </a>
  </div>
  </section>

  <!-- PORTFOLIO AREA -->
  <section id = "portfolio" class="portfolio">
    <h2 class="heading">Portfolios</h2>
    <p class= "text">Check out Lauren's portolios! You may see something you are interested in.</p>
    <div class ="container">
      <div class= "portfolioBx">
        <div>
          <img src="http://laurenbugelli.com/Imgs/paintingGirl.jpg">
          <h2>Paintings</h2>
        </div>
      </div>
      <div class= "portfolioBx">
        <div>
          <img src="http://laurenbugelli.com/Imgs/webDes.jpg">
          <h2>Websites</h2>
        </div>
      </div>
      <div class= "portfolioBx">
        <div>
          <img src="http://laurenbugelli.com/Imgs/sketch.jpg">
          <h2>Sketch Book</h2>
        </div>
      </div>
    </div>
  </section>

<!-- Social Media -->
  <section id = "social" class = "social">
    <div class = "contentBx">
      <h2 class = "heading">Like what you see?</h2>
        <p class= "text">Follow Lauren on her social media</p>
    </div>
    <div class = "iconBx">
      <a style=text-decoration:none href="http://instagram.com">
        <img src = "http://laurenbugelli.com/Imgs/insta.png">
      </a>
    </div>
    <div class = "iconBx">
      <a style=text-decoration:none href="http://facebook.com">
        <img src = "http://laurenbugelli.com/Imgs/facebook.png">
      </a>
    </div>
    <div class = "iconBx">
      <a style=text-decoration:none href="http://linkedin.com">
        <img src = "http://laurenbugelli.com/Imgs/linkIn.png">
      </a>
    </div>
  </section>

  <!-- CONTACT AREA-->
  <section id = "contact" class="contact">
  <div class="contactBx ">
    <form id = "contact-form" method = "post" action = "contact.php">
      <div class = "form">
        <div class = "inputBx">
          <input type = "text" name="name" class = "form-control" placeholder="Name">
        </div>
        <div class = "inputBx">
          <input type = "text" name="email" class = "form-control" placeholder="Email">
        </div>
        <div class = "inputBx">
          <input type = "text" name="subject" class = "form-control" placeholder="Subject">
        </div>
        <div class = "inputBx">
          <input type ="text" name = "message" class = "form-control" placeholder="Ask Lauren something" row = "4"></textarea>
        </div>
        <div class = "inputBx">
          <input type = "submit" class = "form-control submit" name="" value = "Send">
        </div>
      </div>
    </form>
  </div>
  <div class="imgBx"></div>
  </section>


<?php
  include_once 'footer.php';
 ?>
