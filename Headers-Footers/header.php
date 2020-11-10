<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang = "en">
<head>
  <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Lauren Bugelli</title>
  <link rel = "stylesheet" href="http://laurenbugelli.com/Css/homeStyle.css">
</head>
<body>
  <!--header-->
  <section id = "header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a style="text-decoration:none" href="#top"><h1>Artist Page</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar">
            </div>
          </div>
          <ul>

            <?php
              if(isset($_SESSION["useruid"])){
                echo "<li><a href='/php/signIn.php'>Cart/a></li>";
                echo "<li><a href= '/php/logout'>Log out</a></li>";
              }else{
                echo "<li><a href='/php/signIn.php'>Sign Up</a></li>";
                echo "<li><a href= '/php/logIn.php'>Login</a></li>";
              }
             ?>

             <!--
            <li><a href="http://laurenbugelli.com/php/signIn.php" data-after="Sign in">Sign in</a></li>
            <li><a href="http://laurenbugelli.com/php/logIn.php" data-after="Sign in">Login</a></li>
          -->
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#portfolio" data-after="Portfolios">Portfolios</a></li>
            <li><a a href="http://laurenbugelli.com/ContactMe/contactMe.php" data-after="Contact">Contact</a></li>
            <li><a a href="http://laurenbugelli.com/Store/store.php" data-after="Store">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- end header-->
