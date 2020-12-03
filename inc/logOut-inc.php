<?php
  session_start(); //without a started session we cannot delete session variables
  session_unset();
  session_destroy();
  header("location: /index.php");
  exit();
