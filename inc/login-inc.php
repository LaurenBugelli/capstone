<?php
//make sure user accessed this page correctly
  if(isset($_POST["submit"])){
    $username = $_POST["uid"];//even if user uses their email, this will be refered to as username
    $pass = $_POST["pass"];
//database file
    require_once 'dbh-inc.php';
//functions file for error checks
    require_once 'functions-inc.php';

    if(emptyInputLogin($username, $pass) !== false){//if anything BUT false then wrong
      header("location: /php/logIn.php?error=emptyinput");//url will show emptyinput
      exit(); //makes sure script stops
    }

    loginUser($connection, $username, $pass);
  }else{
    header("location: /php/logIn.php");
    exit();
  }
