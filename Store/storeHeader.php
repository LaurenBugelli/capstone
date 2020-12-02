<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang = "en">
<head>
  <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Lauren Bugelli | Store</title>
  <link rel = "stylesheet" href="http://laurenbugelli.com/Css/storeStyle.css">
  <script src="http://laurenbugelli.com/js/store.js" async></script>
</head>
<body>
  <!--header-->
  <section id = "header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a style="text-decoration:none" href="#top"><h1>Lauren's Store</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar">
            </div>
          </div>
          <ul>
            <li><a a href="http://laurenbugelli.com" data-after="HOME">Home</a></li>
            <li><a a href="/Store/store.php" data-after="STORE FRONT">Store Front</a></li>
            <li><a a href="#cart" data-after="CART">Cart</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- end header-->
