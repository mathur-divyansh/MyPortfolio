<?php
    $name = $_POST["name"];
    $visitor_email = $_POST['email']; 
    $message = $_POST['message'];
    $subject =$_POST['subject'];

    $email_from = 'Divyanshresume';
    $email_subject = 'New Form Submission';
    $email_body = "UserName: $name.\n"
                    "Subject: $subject.\n"
                     "USerEmail: $visitor_email.\n"
                      "USerMessage: $message,\n";
    $to ="divyanshmathur@yahoo.com";
    $headers = "From: $email_from \r\n";
    $headers .= "reply-to: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("location: index.html");
 ?>
