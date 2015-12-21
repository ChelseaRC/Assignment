<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Message: $message";
$to = "chizzel-c@hotmail.com";
$subject = "Contact Form";
$header = "From Client: $email \r\n";
"Reply to : $from";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	$message = $_POST['message'];
	  		$header = "From:$email \r\n";
	  		"Reply to : $from";
			
	   		$retval = mail ($to,$subject,$message,$header);
	   		if( $retval == true )  
	   		{
	   			echo "<script> alert('Email sent successfully....We will be in touch as soon as we can.')</script>";   		
	   		}
	   		else
	   		{
		      echo "<script> alert('Opsss !!!....Huston, we have a problem….Email did NOT go to target.');</script>";
		    }
		  }

?>
