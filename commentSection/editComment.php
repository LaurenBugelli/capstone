<?php
  session_start();
  date_default_timezone_set('America/Los_Angeles'); //sets timezone to post in la time
  include 'dbh-inc.php'; //connection to database
  include 'comment-inc.php'; //functions for all comenting aspects
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Portfolio/Comment Page</title>
    <link rel="stylesheet" type = "text/css" href="http://laurenbugelli.com/Css/commentStyle.css">
  </head>
  <body>
<!-- EDIT Comment Section -->
    <section class = "comment-section">
      <div class="comContainer">
        <div class="comForm">
          <?php
          //all the values in the database, all the column names
          $cid = $_POST['cid'];
          $uid = $_POST['uid'];
          $date = $_POST['date'];
          $message = $_POST['message'];

          echo"<form method = 'POST' action='".editComments($connection)."'>
              <input type='hidden' name='cid' value='".$cid."'>
              <input type='hidden' name='uid' value='".$uid."'>
              <input type='hidden' name='date' value='".$date."'>
              <textarea name='message'>".$message."</textarea><br>
              <button type = 'submit' name = 'commentSubmit'>Edit</button>
          </form>";


           ?>
        </div>
      </div>
    </section>

  </body>
</html>
