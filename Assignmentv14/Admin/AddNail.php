<?php
require("SecurityChecks.php");
?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="AdminCss.Css">
<title>Add new Nail Treatment</title>
</head>

<body>
	
	<div id="header">
	<h1>Add new Nail Treatment</h1>
	</div>
	
	<div id="Content">
	<div id="form">
	
	<form id="AddNail" action="NailAdded.php" method="post" name="AddNail">
	
	Service:		<input id="Service" name="Service" type="text" required size="25" value="" /><br/><br/>
	Price: 	<input id="Price" name="Price" type="text" required size="25" value="" /><br/><br/>
				
					<input type="submit" name="SubmitButton" value="Add"/>
					
					
	
	</form>
	</div>
	</div>


</body>

</html>
