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
  <section class = "signup-form">
    <div class = "signin-wrapper">
      <div class="signUp-style">
        <form action="http://laurenbugelli.com/php/login-inc.php" method="post" class = "form" autocomplete="off">
          <h2>Login</h2>
          <div class="input-group">
            <input type="text" name="uid">
            <label for="name">Display name/Email...</label>
          </div>
          <div class = "input-group">
            <input type="password" name="pass">
            <label for="pass">Password...</label>
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
          <button type="submit" name="submit" class = "submit-btn">Login</button>
          <a style="text-decoration:none" href ="/index.php" class = "home-btn"> Return Home</a>
        </form>
      </div>
    </div>
  </section>
    <?php
      include_once 'footer.php';
     ?>
