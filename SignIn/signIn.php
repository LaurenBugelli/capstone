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
        <div class="homebtn-container">
          <form action="http://laurenbugelli.com/php/signIn-inc.php" method="post" class = "form" autocomplete="off">
            <h2 class = "title">Sign Up</h2>
            <div class = "input-group">
              <input type="text" name="name" class= "input">
              <label for="name">Your Name...</label>
              <span>Name</span>
            </div>
            <div class = "input-group">
              <input type="text" name="email"class= "input">
              <label for="email">Email...</label>
              <span>Email</span>
            </div>
            <div class = "input-group">
              <input type="text" name="uid"class= "input">
              <label for="uid">Display Name...</label>
              <span>Display Name</span>
            </div>
            <div class = "input-group">
              <input type="password" name="pass"class= "input">
              <label for="pass">Password...</label>
              <span>Password</span>
            </div>
            <div class = "input-group">
              <input type="password" name="passrepeat"class= "input">
              <label for="passrepeat">Repeat Password...</label>
              <span>Repeat Password</span>
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
            <button type="submit" name="submit" class = "btn">Sign Up</button>

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
