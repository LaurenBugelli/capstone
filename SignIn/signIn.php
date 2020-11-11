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
        <form action="http://laurenbugelli.com/php/signIn-inc.php" method="post" class = "form" autocomplete="off">
          <h2>Sign Up</h2>
          <div class = "input-group">
            <input type="text" name="name">
            <label for="name">Your Name...</label>
          </div>
          <div class = "input-group">
            <input type="text" name="email">
            <label for="email">Email...</label>
          </div>
          <div class = "input-group">
            <input type="text" name="uid">
            <label for="uid">Display Name...</label>
          </div>
          <div class = "input-group">
            <input type="password" name="pass">
            <label for="pass">Password...</label>
          </div>
          <div class = "input-group">
            <input type="password" name="passrepeat">
            <label for="passrepeat">Repeat Password...</label>
          </div>
          <button type="submit" name="submit" class = "submit-btn">Sign Up</button>
          <a style="text-decoration:none" href ="/index.php" class = "home-btn"> Return Home</a>
        </form>
      </div>
      <!-- Tell User if the error they enountered while trying to sign up -->
      <?php
        if(isset($_GET["error"])){
          if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields!</p>";
          }else if($_GET["error"] == "invalidUserNameinput"){
            echo "<p>Your Display Name isn't formated correctly!</p>";
          }else if($_GET["error"] == "invalidEmailInput"){
            echo "<p>Your Email isn't formated correctly!</p>";
          }else if($_GET["error"] == "invalidPasswordInput"){
            echo "<p>Your passwords don't match!</p>";
          }else if($_GET["error"] == "usernameExists"){
            echo "<p>That username exists!</p>";
          }else if($_GET["error"] == "stmtfailed"){
            echo "<p>Something went wrong, try again...</p>";
          }else if($_GET["error"] == "none"){
            echo "<p>You have signed up!</p>";
            echo "<p>Return Home to Log In</p>";

          }
        }
       ?>
     </div>
  </section>


 <?php
   include_once 'footer.php';
  ?>
