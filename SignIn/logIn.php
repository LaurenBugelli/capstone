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
    <h2>Login</h2>
    <div class="signUp-style">
      <form action="http://laurenbugelli.com/php/login-inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/Email...">
        <input type="password" name="pass" placeholder="Password...">
        <button type="submit" name="submit">Login</button>
      </form>
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
  </section>
    <?php
      include_once 'footer.php';
     ?>
