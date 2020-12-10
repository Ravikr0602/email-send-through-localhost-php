<?php

$to_email = "ravikr0602@gmail.com";
$subject = "Check message to delivery";
$body = "Hi, Ravi kumar this email is represent to check message is gone through php xampp server.. ";
$from = "ravikumar060296@gmail.com";
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