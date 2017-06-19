<?php

define("WEBMASTER_EMAIL", 'yourname@yourdomain.com');

$error = false;
$fields = array( 'name', 'email', 'phone', 'subject', 'message' );

foreach ( $fields as $field ) {
	if ( empty($_POST[$field]) || trim($_POST[$field]) == '' )
		$error = true;
}

if ( !$error ) {
	$name = stripslashes($_POST['name']);
	$email = trim($_POST['email']);
	$phone = stripslashes($_POST['phone']);
	$subject = stripslashes($_POST['subject']);
	$message = stripslashes($_POST['message']);

	$mail = @mail(WEBMASTER_EMAIL, $subject, $message,
		 "From: " . $name . " <" . $phone . ">" . " <" . $email . ">\r\n"
		."Reply-To: " . $email . "\r\n"
		."X-Mailer: PHP/" . phpversion());

	if ( $mail ) {
		echo "Success";
	} else {
		echo "Error";
	}
}

?>