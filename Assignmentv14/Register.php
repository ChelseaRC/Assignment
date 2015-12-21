<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Css.css">
<title>Register</title>
</head>

<body>
<div id="ContentReg">

	<h1>Enter details below</h1>
	<div id="RegForm">
	<form id="Register" action="ContactRegistered.php" method="post" name="Register">
	
	Username: 			<input id="Username" name="Username" type="text" required size="25" value="" /><br/><br/>
	Password: 			<input id="Password" name="Password" type="password" required pattern=".{5,}" title="Four or more characters" size="25" value="" /><br/><br/>
	Name: 				<input id="Name" name="Name" type="text" required size="25" value="" /><br/><br/>
	Phone: 				<input id="Phone" name="Phone" type="text" required size="25" value="" /><br/><br/>
	Address: 			<input id="Address" name="Address" type="text" required size="25" value="" /><br/><br/>
	
						<input type="submit" name="SubmitButton" value="Register"/>
						<div id="GoBack">
						<a href="Index.php">Back To Homepage</a>
						</div>
	
	</form>
</div>
</div>
</body>

</html>
