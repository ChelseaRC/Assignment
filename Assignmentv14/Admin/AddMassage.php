<?php
require("SecurityChecks.php");
?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="AdminCss.Css">
<title>Add new Massage Treatment</title>
</head>

<body>
	
	<div id="header">
	<h1>Add new Massage Treatment</h1>
	</div>
	
	<div id="Content">
	<div id="form">
	
	<form id="AddMassage" action="MassageAdded.php" method="post" name="AddMassage">
	
	Service:		<input id="Service" name="Service" type="text" required size="25" value="" /><br/><br/>
	Price: 	<input id="Price" name="Price" type="text" required size="25" value="" /><br/><br/>
				
					<input type="submit" name="SubmitButton" value="Add"/>
					
					
	
	</form>
	</div>
	</div>


</body>

</html>
