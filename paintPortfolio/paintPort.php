<?php
  session_start();
  date_default_timezone_set('America/Los_Angeles'); //sets timezone to post in la time
  include 'dbh-inc.php'; //connection to database
  include 'comment-inc.php';//functions for all comenting aspects
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Portfolio/Comment Page</title>
    <link rel="stylesheet" type = "text/css" href="http://laurenbugelli.com/Css/paintPortStyle.css">
  </head>
  <body>
    <section id = "gallery" class = "wrapper-gallery">
      
      <h2 class = "title">Paint Gallery</h2>
      <div class="gallary-img img1">
        <div>
          <a href="#">Give and Take</a> <!-- painting title -->
        </div>
      </div>
      <div class="gallary-img img2">
        <div>
          <a href="#">Give and Take</a>
        </div>
      </div>
      <div class="gallary-img img3">
        <div>
          <a href="#">Give and Take</a>
        </div>
      </div>
      <div class="gallary-img img4">
        <div>
          <a href="#">Give and Take</a>
        </div>
      </div>
      <div class="gallary-img img5">
        <div>
          <a href="#">Give and Take</a>
        </div>
      </div>
      <div class="gallary-img img6">
        <div>
          <a href="#">Give and Take</a>
        </div>
      </div>
      <div class="gallary-img img7">
        <div>
          <a href="#">Give and Take</a>
        </div>
      </div>
      <a href="http://laurenbugelli.com">
        <input type="submit" value="Home" class="goHome" />
      </a>
    </section>
<!-- Comment Section -->
    <section class = "comment-section">
      <div class="comContainer">
        <div class="comTitleBox">
          <h2>Start a Conversation with the Community</h2>
          <p>Want to talk about a product or just talk about what inspires or motivates you to be creative?
            Think about leaving a review or a comment to fellow like minded people below...</p>
        </div>
        <div class="comForm">
          <?php
          $user = "";
          if(isset($_SESSION["useruid"])){
            $user =  $_SESSION["useruid"];
          }else{
            $user = "Anonymous";
          }

          echo"<form method = 'POST' action='".setComments($connection)."'>
              <input type='hidden' name='uid' value='".$user."'>
              <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
              <textarea name='message'></textarea><br>
              <button type = 'submit' name = 'commentSubmit'>Comment</button>
          </form>";

          getComments($connection);
           ?>
        </div>
      </div>
    </section>

<script src="\js\paintJs.js"></script>
<?php
  include_once 'footer.php';
 ?>
