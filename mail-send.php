<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
        $email=$_POST['phone'];
        $email=$_POST['case'];
		
		$msg=$_POST['message'];

		$to='info@sorieandbangura.com'; // Receiver Email ID
		$subject='New Message Received from Sorie and Bangura Law Firm';
		$message="Name :".$name."\n"."Phone: ".$phone."\n"."Case: ".$case."\n". "Wrote the following: "."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>