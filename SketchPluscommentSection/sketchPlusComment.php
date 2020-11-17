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
    <link rel="stylesheet" type = "text/css" href="http://laurenbugelli.com/Css/SketchCommentStyle.css">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <div class="form">
        <div class="content">
          <h2 class="title">"<span>All art</span> is about
            <br>dirtying the paper
            <br> delicately."</h2>
          <p class="text">
            -John Ruskin
          </p>

          <div class="pages">
            <p>Flip through Lauren's
              <br>'dirty' pages:</p>

            <div class="controller">
              <ul>
                <li class="active pgBtn">01</li>
                <li class="pgBtn">02</li>
                <li class="pgBtn">03</li>
                <li class="pgBtn">04</li>
                <li class="pgBtn">05</li>
              </ul>
            </div>
          </div>
          <div class="home">
            <br>
            <br>
            <br>
            <a href="http://laurenbugelli.com">
              <input type="submit" value="Home" class="btn" />
            </a>
          </div>
        </div>

        <div class="sketchBook">
          <div class="imgBx">
            <img id="pic" src="http://laurenbugelli.com/Imgs/sketch.jpg">
          </div>
        </div>
      </div>
    </div>
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

    <script src="\js\sketch.js"></script>

<?php
  include_once 'footer.php';
 ?>
