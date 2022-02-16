<?php 

$name= $_POST['name'];
$visitor_email= $_POST['email'];
$message= $_POST['messages'];

$email_from="rehanpanakkaparambil@icloud.com" ;
$email_subject="New Form Submission" ;
$email_body=" user name: $name.\n".
                "User Email: $visitor_email.\n".
				   "User Message: $messages.\n";
				   
		$to="rehanbiju58@gmail.com";
		$headers ="From: $email_from\r\n";
		$headers ="Replay-to: $visitor_email\r\n";
		
		mail($to,$email_subject,$email_body,$headers);
		header("Location: contact.html")
 ?>