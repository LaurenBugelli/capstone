<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Lauren Bugelli</title>
    <link rel = "stylesheet" href="http://laurenbugelli.com/Css/contactStyle.css">
  </head>
  <body>
    <div class="banner">
      <img src="http://laurenbugelli.com/Imgs/contactme.jpg">
      <div class="contact-title">
        <h1>Want to Commision this Artist?</h1>
        <h2>Start a conversation today!</h2>
        <h3>or<h3>
          <a style=text-decoration:none href="http://laurenbugelli.com">
            <h2>Return Home</h2>
          </a>

      </div>
      <div class="contact-form">
        <form id = "contact-form" method = "post" action = "http://laurenbugelli.com/php/contact.php">
          <div class = "form">
            <input type="text" name="name" class="form-control" placeholder="Name" autocomplete="off"required>
            <br>
            <input type="text" name="email" class="form-control" placeholder="Email" autocomplete="off"required>
            <br>
            <input type="text" name="subject" class="form-control" placeholder="Subject" autocomplete="off"required>
            <br>
            <textarea name="message" class="form-control" rows="8" cols="80"></textarea>
            <br>
            <input type="submit" class="form-control submit" value="Send Email">

          </div>
        </form>

      </div>
    </div>

    <!--
    <h1>Want to Commision this Artist?</h1>
    <form id = "contact-form" method = "post" action = "contact.php">
      <div class="form">

        <div class = "container">
          <input type="text" name="name" autocomplete="off" required/>
          <label for="name" class = "label-name">
            <span class = "content-name">Name</span>
          </label>
        </div>

        <div class = "container">
          <input type="text" name="email" autocomplete="off" required/>
          <label for="email" class = "label-email">
            <span class = "content-email">Email</span>
          </label>
        </div>

        <div class = "container">
          <input type="text" name="subject" autocomplete="off" required/>
          <label for="subject" class = "label-subject">
            <span class = "content-subject">Subject</span>
          </label>
        </div>

        <div class = "container">
          <input type="text" name="message" autocomplete="off" required/>
          <label for="message" class = "label-message">
            <span class = "content-message">Message</span>
          </label>
        </div>

      </div>
    </form>
  </body>
-->
<?php
  include_once 'footer.php';
 ?>
