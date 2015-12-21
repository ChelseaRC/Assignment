<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="AdminCss.Css">
<title>Index</title>
</head>

<body>
<div id="header">
	<h1>Admin Login</h1>	
	</div>

	<div id="Content">
	<div id="Login">

	<form method="post" action="ValidateLogin.php">

	
		
		Username: <input type="text" name="Username"><br/><br/>
		Password: <input type="password" name="Password">
		
		<?php if (isset($_GET['LoginError'])) 
			   {
			   		
			   		echo $_GET['LoginError'];
			   		
			    }
		?>
		
		<input type="submit" value="Log in">	

	</form>
	</div>
</div>
</body>

</html>
