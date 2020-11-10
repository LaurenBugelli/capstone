<?php
  //User inputs
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  $email_subject = $_POST['subject'];
  //test
  $email_from = 'laurenltb95@gmail.com';

  //format Email
  $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                    "User Message: $message.\n";
  //send to this Email
  $to = 'laurenltb95@gmail.com';

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
  header("location: http://laurenbugelli.com");
