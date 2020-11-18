<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['origin']) && strlen($_POST['origin']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$origin = $_POST['origin'];
	$message = $_POST['message'];
	
	$to = 'contact@lachouetteagence.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Un visiteur vous a écrit depuis votre site web.";
	$email_body = "Vous avez reçu un nouveau message. \n\n".
					"Son nom: $name \nSon e-mail: $email \nManière selon laquelle ce visiteur vous a connu: $origin \nSon message: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@lachouetteagence.com\n";
	$headers .= "Reply-To: $origin";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>