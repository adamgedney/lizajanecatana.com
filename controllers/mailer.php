<?php

if(isset($_GET['action'])){
	if($_GET['action'] == "subscribe"){

		$name = $_POST['name'];
		$from = $_POST['email'];
		$site = $_POST['website'];
		$phone = $_POST['phone'];
		$services = $_POST['services'];
		$list = "";

		//loops through checkboxes, concatenating onto list variable
		foreach ($services as $s){
		    $list .= $s . ", ";
		        
		}

		//MAIL new subscriber info
		$header  = 'MIME-Version: 1.0' . "\r\n";
		$header .= "Reply-To: info@sgwebmarketing.com\r\n";
		$header .= "Return-Path: info@sgwebmarketing.com\r\n";
		$header .= 'From: Adam Gedney <info@sgwebmarketing.com>' . "\r\n";

		$to = 'info@sgwebmarketing.com';
		$subject = "New Request For Proposal SG Internet Marketing";

		$message = "You have a new RFP inquiry. \r\n \r\n" . 
		"Name: " . $name . " \r\n" . 
		"Email: " . $from . " \r\n" .
		"Website: " . $site . " \r\n" .  
		"Phone: " . $phone . " \r\n" . 
		"Services: " . $list . " \r\n \r\n" .
		"Keep on Truckin! \r\n" .
		"The SGIM Website Ghost";
		
		//send email
		// mail($to,$subject,$message,$header);
		mail($to,$subject,$message,$header);
		header('Location: /thankyou.html');




	//contact form handler
	}if($_GET['action'] == "contact"){

		$name = $_POST['name'];
		$from = $_POST['email'];
		$site = $_POST['website'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];

		//MAIL new subscriber info
		$header  = 'MIME-Version: 1.0' . "\r\n";
		$header .= "Reply-To: info@sgwebmarketing.com\r\n";
		$header .= "Return-Path: info@sgwebmarketing.com\r\n";
		$header .= 'From: Adam Gedney <info@sgwebmarketing.com>' . "\r\n";

		$to = 'info@sgwebmarketing.com';
		$subject = "New Contact Form Submission From SG Internet Marketing";

		$message = "You have a new Contact inquiry. \r\n \r\n" . 
		"Name: " . $name . " \r\n" . 
		"Email: " . $from . " \r\n" .
		"Website: " . $site . " \r\n" .  
		"Phone: " . $phone . " \r\n" . 
		"Message: " . $message . " \r\n \r\n" .
		"Keep on Boogaloo! \r\n" .
		"The SGIM Website Aura";
		
		//send email
		// mail($to,$subject,$message,$header);
		mail($to,$subject,$message,$header);
		header('Location: /thankyou.html');

	}// /action
}// /isset
?>