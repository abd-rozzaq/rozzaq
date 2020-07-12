<?php

$name = $_POST['name'];
$email = $_POST['email'];
$designtype = $_POST['designtype'];
$priority = $_POST['priority'];
$message = $_POST['message'];

$email_from = 'Rozzaq';
$email_subject = 'New Message From Rozzaq Contact';
$email_body = "Name: $name.\n" .
    "Email: $email.\n" .
    "Designtype: $designtype.\n" .
    "Priority: $priority.\n" .
    "Message: $message.\n";

$to = "contact@rozzaq.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("location: index.html");
