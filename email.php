<?php

// to_mail means sender email address
$to_email = "ravikr@gmail.com";
$subject = "Check message to delivery";
$body = "Hi, User this email is represent to check message is gone through php xampp server.. ";
// from means Your email that your gave you in localhost 
$from = "youremail@gmail.com";
$headers ="From:" .$from;

if(mail($to_email, $subject, $body, $headers))
{
    echo" Email successfully sent to $to_email...";

}
else
{
    echo" Email not send";
}
?>
