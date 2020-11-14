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
    <link rel="stylesheet" type = "text/css" href="http://laurenbugelli.com/Css/commentStyle.css">
  </head>
  <body>
    <section class = "portfolio-section">

    </section>
<!-- Comment Section -->

    <section class = "comment-section">
      <div class="comContainer">
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

  </body>
</html>
