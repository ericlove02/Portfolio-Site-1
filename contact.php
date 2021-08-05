<?php
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
  	$email = $_POST['email'];
  	$message = $_POST['message'];

	$to = 'ericlove2002@gmail.com';

	$email_subject = "Portfolio form contact";

	$email_body = "You have received a new message from the user $fname $lname.\n. Here is the message:\n $message";

$headers = "From: $email \r\n";

mail($to, $email_subject, $email_body, $headers);
header('Location: http://ericlove.online/contact-recieved.html');
?>