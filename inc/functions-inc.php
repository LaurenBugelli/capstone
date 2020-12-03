<?php
function usernameExists($connection, $username, $email) {
  //make sure user cannot destroy database with code, so make sure format is correct befor...
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;"; //first colon closes sql, second closes php
  //...making the connection to the database
  $stmt = mysqli_stmt_init($connection);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: /php/signIn.php?error=stmtinput");
    exit();//makes sure script stops
  }
  //pass in data from the user
  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  //execute
  mysqli_stmt_execute($stmt); //OPEN
  //Grab data
  $resultData = mysqli_stmt_get_result($stmt);
  //CHECK IF THERE IS A result
  if($row = mysqli_fetch_assoc($resultData)){//create a row variable while checking
    //if username exists grab that data for login form
    return $row;
  }else{
    $result = false;
    return $result;
  }
  mysqli_stmt_close($stmt); //CLOSE
}
//CHECK if password and repeated password are the same
function passwordCheck($pass, $passRepeat){
    $results; //will return true/false
    if($pass !== $passRepeat){
      $results = true;
    }else{
      $results = false;
    }
    return $results;
}
//Function to check email format
function invalidEmail($email){
    $results; //will return true/false
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $results = true;
    }else{
      $results = false;
    }
    return $results;
}
//Make sure all boxes are filled in
function emptyIn($name, $email, $username, $pass, $passRepeat){
    $results; //will return true/false if empty inputs
    if(empty($name) || empty($email)|| empty($username)|| empty($pass)|| empty($passRepeat)){//all need to be not empty to be false
      $results = true;
    }else{
      $results = false;
    }
    return $results;
}
function invalidUsername($username){
    $results; //will return true/false
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){//test for proper format, only true if there is a mistake
      $results = true;
    }else{
      $results = false;
    }
    return $results;
}
function createUser($connection, $name, $email, $username, $pass) {
    //make sure user cannot destroy database with code, so make sure format is correct befor...
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPass) VALUES(?, ?, ?, ?);"; //first colon closes sql, second closes php
    //...making the connection to the database
    $stmt = mysqli_stmt_init($connection);
    //CHECK IF FAILURE
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("location: /php/signIn.php?error=stmtinput");
      exit();//makes sure script stops
    }
    //make sure that no one can see anyone elses password
    $hashPass = password_hash($pass, PASSWORD_DEFAULT); //use default library to produce stars
    //pass in data from the user
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashPass);
    //execute
    mysqli_stmt_execute($stmt); //OPEN
    mysqli_stmt_close($stmt); //CLOSE
    header("location: /php/signIn.php?error=none");
    exit();
}
function emptyInputLogin($username, $pass){
    $results; //will return true/false if empty inputs
    if(empty($username)|| empty($pass)){//all need to be not empty to be false
      $results = true;
    }else{
      $results = false;
    }
    return $results;
}
function loginUser($connection, $username, $pass){
  $uidExists = usernameExists($connection, $username, $username); //check if username exists in the database already

  //error handler
  if($uidExists === false){
    header("location: /php/logIn.php?error=wronglogin");
    exit();
  }
  //variables to check hashed pass matches user input
  $hashPass = $uidExists["usersPass"]; //php doesnt use index notations, that is why we call the "usersPass" collumn name instead
  $checkPass = password_verify($pass, $hashPass);

  if($checkPass === false){ //if false than passwords are not the same
    header("location: /php/logIn.php?error=wronglogin");
    exit();
  }else if ($checkPass === true){ //if true log in user
    session_start();
    $_SESSION["userid"] = $uidExists["usersId"];
    $_SESSION["useruid"] = $uidExists["usersUid"];
    header("location: /index.php");
    exit();
  }
}
//no ending php tag to prevent accidental errors
