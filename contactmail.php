<?php

$EmailTo = "info@sorieandbangura.com";
$Subject = "New Message Received From S&B Law Firm";

$errorMSG = "";
$name = $email = $message = null;

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL

if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MESSAGE

if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];

}

// prepare email body text
$Body = null;
$Body .= "<p><b>Name:</b> {$name}</p>";
$Body .= "<p><b>Email:</b> {$email}</p>";
$Body .= "<p><b>Message:</b> </p><p>{$message}</p>";

 

// send email
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:  ' . $name . ' <' . $email .'>' . " \r\n" .
            'Reply-To: '.  $fromEmail . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

if($name && $email && $message){
    $success = mail($EmailTo, $Subject, $Body, $headers );
}else{
    $success = false;
}


if ($success && $errorMSG == ""){
   echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
} 