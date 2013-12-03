<?php

if(isset($_GET['action'])){
	
	if($_GET['action'] == "contact"){

		$name = $_POST['name'];
		$from = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];

		//MAIL new subscriber info
		$header  = 'MIME-Version: 1.0' . "\r\n";
		$header .= "Reply-To: adam.gedney@gmail.com\r\n";
		$header .= "Return-Path: adam.gedney@gmail.com\r\n";
		$header .= 'From: Adam Gedney <adam.gedney@gmail.com>' . "\r\n";

		$to = 'adam.gedney@gmail.com';
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