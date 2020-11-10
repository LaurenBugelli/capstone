<?php
//Using MySQLi for Procedural php -MySQLi is secured for passwords, MSQL is not
 $serverName = "localhost";
 $databaseUserName = "laurenltb";
 $databasePassword = "Zc829094!";
 //Name of The Data Base specifically for the login Data
 $databaseName = "loginSystem";
//Connection to the database
 $connection = mysqli_connect($serverName, $databaseUserName, $databasePassword, $databaseName);
//HANDLER FOR ERRORS
if($connection === false){
  die("Database connection has failed: " . mysqli_connect_err0r());
}
