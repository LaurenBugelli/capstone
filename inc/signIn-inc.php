<?php
//make sure user submits form properly
 if(isset($_POST["submit"])){
   //echo "It works";
   //GRAB VARIABLE FROM signUP.php file
   $name = $_POST["name"];
   $email = $_POST["email"];
   $username = $_POST["uid"];
   $pass = $_POST["pass"];
   $passRepeat = $_POST["passrepeat"];
   //ERROR handlers
   require_once 'dbh-inc.php';
   require_once 'functions-inc.php';
   //CATCH if User left inputs empty
   if(emptyIn($name, $email, $username, $pass, $passRepeat) !== false){//if anything BUT false then wrong
     header("location: /php/signIn.php?error=emptyinput");//url will show emptyinput
     exit(); //makes sure script stops
   }
   //CHECK for proper Username
   if(invalidUsername($username) !== false){//if anything BUT false then wrong
     header("location: /php/signIn.php?error=invalidUserNameinput");//url will show emptyinput
     exit(); //makes sure script stops
   }
   //CHECK for properemail
   if(invalidEmail($email) !== false){
     header("location: /php/signIn.php?error=invalidEmailInput");
     exit(); //makes sure script stops
   }
   //CHECK for proper PASSWORD
   if(passwordCheck($pass, $passRepeat) !== false){
     header("location: /php/signIn.php?error=invalidPasswordInput");
     exit(); //makes sure script stops
   }
   //CHECK IF USERNAME IS ALREADY TAKEN
   if(usernameExists($connection, $username, $email) !== false){
     header("location: /php/signIn.php?error=usernameExists");
     exit(); //makes sure script stops
   }
   //USER MADE NO MISTAKES, SIGN UP User
   createUser($connection, $name, $email, $username, $pass);
 }else{
     echo "please enter my site correctly";
     header("location: ../signIn.php");
 }
