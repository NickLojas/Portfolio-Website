<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$rating = $_POST['rating'];

	$mailTo = "nick.lojas@hotmail.com";
	$subject = "Website form submit";
	$headers = "From: ".$email;
	$txt = "You have received an email from ".$name.".\n\n".$message.".\n\nWith Rating: ".$rating;


	mail($mailTo, $subject, $txt, $headers);

	header("Location: contact.html?mailsend");
}

?>