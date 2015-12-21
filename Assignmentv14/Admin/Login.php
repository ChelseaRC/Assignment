<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Login</title>
</head>

<body>

<form method="post" action="ValidateLogin.php">

		<p>Login</p>	
		
		Username: <input type="text" name="Username" id="Username">	
		Password: <input type="password" name="Password" id="Password">
		
		<?php if (isset($_GET['LoginError'])) 
			   {
			   		
			   		echo $_GET['LoginError'];
			   		
			    }
		?>
		
		<input type="submit" value="Log in">
		</form>


</body>

</html>
