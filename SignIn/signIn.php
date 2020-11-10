<!DOCTYPE html>
<html lang = "en">
<head>
  <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Lauren Bugelli</title>
  <link rel = "stylesheet" href="http://laurenbugelli.com/Css/homeStyle.css">
</head>
<body>
  <section class = "signup-form">
    <h2>Sign Up</h2>
    <div class="signUp-style">
      <form action="http://laurenbugelli.com/php/signIn-inc.php" method="post">
        <input type="text" name="name" placeholder="Full Name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="uid" placeholder="Display Name..">
        <input type="password" name="pass" placeholder="Password...">
        <input type="password" name="passrepeat" placeholder="Repeat Password...">
        <button type="submit" name="submit">Sign Up</button>
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
        }
      }
     ?>
  </section>


 <?php
   include_once 'footer.php';
  ?>
