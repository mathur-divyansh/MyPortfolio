  
<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email']; 
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $email_from = 'Divyanshresume@dm.com';
    $email_subject = 'New Form Submission';
    $email_body = "UserName: $name.\n".
                    "Subject: $subject.\n".
                     "USerEmail: $visitor_email.\n".
                      "USerMessage: $message,\n";
    $toEmail ='divyansh231099@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers .= "reply-to: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("location: index.html");
 
 ?>
