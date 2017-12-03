<?php
	
	function redirect_to($location)
	{
		if($location != NULL)
		{
			header("Location: {$location}");
		}
		else
		{
			//echo "Redirect not sent.";
		}
	}
	
	function sendMessage($name, $email, $msg, $direct)
	{
		
		$headers = "From: {$email}";
		$to = "afilion@hotmail.com";
		$subj = "Message from afilion.ca";
		$body = "Name: {$name}\n\nEmail: {$email}\n\nMessage: {$msg}\n\n";
			
		//echo $body;
		
		
		//This will not work locally on your machine
		mail($to, $subj, $body, $headers);
		redirect_to($direct);
		
		
	}

?>