<?php
// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: contact.php'); exit;
}

// get the posted data
$name 					= $_POST['contact_name'];
$email_address 	= $_POST['contact_email'];
$email_subject 	= $_POST['contact_subject'];
$message 				= $_POST['contact_message'];
	
// check that a name was entered
if (empty($name))
    $error = 'Please enter your full name.';
// check that an email address was entered
elseif (empty($email_address)) 
    $error = 'Please enter your email.';
// check for a valid email address
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address))
    $error = 'Please enter a valid e-mail address.';
// check that a subject was entered
elseif (empty($email_subject))
    $error = 'Please enter the subject of your message.';
// check that a message was entered
elseif (empty($message))
    $error = 'Please enter your message.';
		
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: contact.php?e='.urlencode($error)); exit;
}
		
// write the email content
$email_content 	= "Name: $name\n";
$email_content .= "Email Address: $email_address\n";
$email_content .= "Subject: $email_subject\n";
$email_content .= "Message:\n\n$message";
	
// send the email
mail ("info@fibertex.gr", "New Contact Message", $email_content);
	
// send the user back to the form
header('Location: contact.php?s='.urlencode('Thank you for your message.')); exit;

?>
