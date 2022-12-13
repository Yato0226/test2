<?php
$to = "louizedisposableacc01@gmail.com";
$subject = "Visitor IP Address";
$message = "The visitor's IP address is: " . $_SERVER['REMOTE_ADDR'];
$headers = "From: yato0226.github.io/test2@gmail.com";

mail($to, $subject, $message, $headers);
?>
