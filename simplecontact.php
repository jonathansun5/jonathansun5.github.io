<?php $name = $_POST['name-id'];
$email = $_POST['email-id'];
$sub = $_POST['subject-id'];
$message = $_POST['message-id'];
$formcontent="From: $name \n Subject: $sub \n Message: $message";
$recipient = "jonathansun5@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>