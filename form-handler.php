<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'aayushi.dhondphale9@gmail.com';

$email_subject = 'New From Submission';

$email_body = "User Name: $name.n\".
                "User Email: $visitor_email.n\".
                    "Subject: $subject.n\".
                        "User Name: $message.n\";

$to = 'aayushi.dhondphale7@gmail.com';

$header = "From: $email_from \r\n";
    
$header .= "Reply-to: $visitor_email \r\n";
    
mail($to,$email_subject,$email-body,$headers);

header("Location: contact.html")
?>