<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'Tchonanghigherinstitute.org';
$email_subject = 'New form Submission';
$email_body = "User Name: $name.\n".
                "User email: $visitor_email.\n".
                "User subject: $subject.\n".
                "User message: $message.\n";


$to = 'ndahnerius@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");




?>