<!DOCTYPE html>
<html>


<body>

<Div id="Login">
<?php

	
	if (!isset($_SESSION['logininfo'])) 
	{
	  echo "<a href='Login.php'>Login &nbsp &nbsp &nbsp &nbsp</a>";	
	  echo "<a href='Register.php'>Register</a>";
	  			   	
		   	

	}
	
	else{
	
	echo "Welcome, " .$_SESSION['Username'];
	echo '<a id="logout" href="Logout.php">.&nbsp &nbsp &nbsp Logout</a>'	;
	

}
?>
</div>


</body>

</html>
