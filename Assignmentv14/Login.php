<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Css.css">
<title>Login</title>
</head>

<body>
<div id="Main">

<div id="Header">

			<img src="Header2.jpg" alt="Header_Image" style="width:100%;height:300px">

		</div>
			
	<div id="Content">
	
	<div id="LoginPage">
				


<form method="post" action="ValidateLogin.php">

		<h1>Login</h1>
	
		
		Username: <input type="text" name="Username">	
		Password: <input type="password" name="Password">
		
		<?php if (isset($_GET['LoginError'])) 
			   {
			   		
			   		echo $_GET['LoginError'];
			   		
			    }
		?><br/><br/>
		
		<input type="submit" value="Log in">
		<a href="Register.php">Register</a>
		</form>
</div>
</div>
</div>
</body>

</html>
