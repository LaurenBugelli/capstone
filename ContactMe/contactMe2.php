<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel = "stylesheet" href="http://laurenbugelli.com/Css/contactMe2Styles.css">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Why not start a conversation about future commisions?
            Lauren is excited and motivated to start new projects.
          </p>

          <div class="info">
            <div class="information">
              <p>Lauren is located in Orange county</p>
            </div>
            <div class="information">
              <p>laurenltb95@gmail.com</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with Lauren:</p>
            <!-- this div container makes use of a library of icons from fontawesome -->
            <div class="social-icons">
              <a href="http://facebook.com">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="http://instagram.com">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="http://linkedin.com">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
          <div class="home">
            <br>
            <br>
            <br>
            <a href="http://laurenbugelli.com">
              <input type="submit" value="Home" class="btn" />
            </a>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form id = "contact-form" method = "post" action = "http://laurenbugelli.com/php/contact.php" autocomplete="off">
            <h3 class="title">Contact the Artist</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="name">Name</label>
              <span>Name</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="email">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="subject" class="input" />
              <label for="subject">Subject</label>
              <span>Subject</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="\js\contactMe2.js"></script>
    <?php
      include_once 'footer.php';
     ?>
