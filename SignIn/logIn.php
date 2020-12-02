<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang = "en">
<head>
  <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Lauren Bugelli</title>
  <link rel = "stylesheet" href="http://laurenbugelli.com/Css/signInStyle.css">
</head>
<body>
  <div class="container">
    <section class = "signup-form">
      <div class = "signin-wrapper">
        <div class="signUp-style">
          <form action="http://laurenbugelli.com/php/login-inc.php" method="post" class = "form" autocomplete="off">
            <h2 class = "title">Login</h2>
            <div class="input-group">
              <input type="text" name="uid"class= "input">
              <label for="name">Display name/Email...</label>
              <span>Name</span>
            </div>
            <div class = "input-group">
              <input type="password" name="pass"class= "input">
              <label for="pass">Password...</label>
              <span>Password</span>
            </div>
            <?php
              if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                  echo "<p>Fill in all fields!</p>";
                }else if($_GET["error"] == "wronglogin"){
                  echo "<p>Incorrect login information</p>";
                }
              }
             ?>
            <button type="submit" name="submit" class = "btn">Login</button>
          </form>
        </div>
      </div>
      <br>
      <br>
      <a href="http://laurenbugelli.com">
        <input type="submit" value="Home" class="btn" />
      </a>
    </section>
  </div>
<script src="\js\contactMe2.js"></script>
    <?php
      include_once 'footer.php';
     ?>
