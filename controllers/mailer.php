<?php

if(isset($_GET['action'])){
	
	if($_GET['action'] == "contact"){

		$name = $_POST['name'];
		$from = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];

		//MAIL new subscriber info
		$header  = 'MIME-Version: 1.0' . "\r\n";
		$header .= "Reply-To: info@lizajanecatana.com\r\n";
		$header .= "Return-Path: info@lizajanecatana.com\r\n";
		$header .= 'From: Liza Jane Catana <info@lizajanecatana.com>' . "\r\n";

		$to = 'info@lizajanecatana.com';
		$subject = "New Contact Form Submission From LizaJaneCatana.com";

		$message = "You have a new Contact inquiry. \r\n \r\n" . 
		"Name: " . $name . " \r\n" . 
		"Email: " . $from . " \r\n" .  
		"Phone: " . $phone . " \r\n" . 
		"Message: " . $message . " \r\n \r\n" .
		"Excellent!";
		
		//send email
		// mail($to,$subject,$message,$header);
		mail($to,$subject,$message,$header);
		header('Location: /');

	}// /action
}// /isset
?>