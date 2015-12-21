<?php
require("SecurityChecks.php");
?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="AdminCss.Css">
<title>Add Contact</title>
</head>

<body>

	<div id="header">
	<h1>Add a new Contact</h1>
	</div>
	
		<div id="Content">
		
		<div id="form">
		
	<form id="AddContact" action="ContactAdded.php" method="post" name="AddContact" enctype="multipart/form-data">
	
	Name: <input id="Name" name="Name" type="text" required size="25" value="" /><br/><br/>
	Phone: <input id="Phone" name="Phone" type="text" required size="25" value="" /><br/><br/>
	Address: <input id="Address" name="Address" type="text" required size="25" value="" /><br/><br/>
	Select image to upload:	<input type="file" name="fileToUpload" id="fileToUpload"/><br/><br/>
	<input type="submit" name="SubmitButton" value="Add contact"/>

	
	</form>
	
	</div>
	
	</div>


</body>

</html>
