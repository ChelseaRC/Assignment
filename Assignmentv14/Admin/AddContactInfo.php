<?php
require("SecurityChecks.php");
?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="AdminCss.Css">
<title>Add Contact Information</title>
</head>

<body>
	
	<div id="header">
	<h1>Add new Contact Information</h1>
	</div>
	
	<div id="Content">
	<div id="form">
	
	<form id="AddContactInfo" action="ContactInfoAdded.php" method="post" name="AddContactInfo">
	
	PhoneNo:		<input id="PhoneNo" name="PhoneNo" type="text" required size="25" value="" /><br/><br/>
	Email: 			<input id="Email" name="Email" type="email" required size="25" value="" /><br/><br/>
	Location: 		<input id="Location" name="Location" type="text" required size="25" value=""/><br/><br/>
					
					<input type="submit" name="SubmitButton" value="Add Contact Information"/>
	
	</form>
	</div>
	</div>


</body>

</html>
