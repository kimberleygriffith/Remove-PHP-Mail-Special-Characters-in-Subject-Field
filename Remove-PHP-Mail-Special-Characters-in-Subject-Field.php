<?php

//Add this line to change the html entities to the proper values:
$subject = '=?UTF-8?B?'.base64_encode($subject).'?=';

$to = 'me@example.com';
$subject = 'Coffee &amp; Laptop';
$subject = '=?UTF-8?B?'.base64_encode($subject).'?=';
$message = 'HTML message...'; 
$headers = 'MIME-Version: 1.0' . "\r\n"; $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; $headers .= 'From: Me <me@example.com>' . "\r\n"; mail($to, $subject, $message, $headers);

?>