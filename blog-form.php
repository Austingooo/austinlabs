<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@creatingland4u.ml';

$email_subject = 'New Comment';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
	        "Subject: $subject.\n".
		"User Message: $message .\n". ;

$to = 'ufomaduaustin1@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

headers("location: blog.html");
?>