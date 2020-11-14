<?php
//setters and getters for comments
//set comments
function setComments($connection){
  if(isset($_POST['commentSubmit'])){//error handler to make sure function only runs if button is clicked
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    //insert to Database
    $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
    $result = $connection->query($sql);
    header("Location: comment.php");
  }
}
//get comments
  function getComments($connection){ //include conection to database
    $sql = "SELECT * FROM comments";
    $result = $connection->query($sql);
    while(  $row = $result->fetch_assoc()){//grab everything in the database and put it into an array, cycle through it
        echo "<div class = 'comBox'><p>";
          echo $row['uid']."<br>";
          echo $row['date']."<br>";
          echo "<br>";
          echo nl2br($row['message']); //nl2br finds empty lines that php calls nl and makes them line breaks br
        echo "</p>
          <form class='deleteForm' method='POST' action='".deleteComments($connection)."'>
            <input type='hidden' name='cid' value='".$row['cid']."'>
            <button type ='submit' name='commentDelete'>Delete</button>
          </form>
          <form class='editForm' method='POST' action='editComment.php'>
            <input type='hidden' name='cid' value='".$row['cid']."'>
            <input type='hidden' name='uid' value='".$row['uid']."'>
            <input type='hidden' name='date' value='".$row['date']."'>
            <input type='hidden' name='message' value='".$row['message']."'>
            <button>Edit</button>
          </form>
        </div>";
    }
  }
  //edit comment function
  function editComments($connection){
    if(isset($_POST['commentSubmit'])){//error handler to make sure function only runs if button is clicked
      $cid = $_POST['cid'];
      $uid = $_POST['uid'];
      $date = $_POST['date'];
      $message = $_POST['message'];

      //update comment in Database
      $sql = "UPDATE comments SET message= '$message' WHERE cid='$cid'";
      $result = $connection->query($sql);
      header("Location: comment.php");

    }
  }
  //delete comments function
  function deleteComments($connection){
    if(isset($_POST['commentDelete'])){//error handler to make sure function only runs if button is clicked
      $cid = $_POST['cid'];

      //delete comments in database by cid
      $sql = "DELETE FROM comments WHERE cid='$cid'";
      $result = $connection->query($sql);
      header("Location: comment.php");
    }
  }
