<?php

	include_once("DatabaseLogin.php");
	session_start();

	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	
	if ($Username && $Password)
	{

	$result = mysqli_query($con,"SELECT * FROM tbladmin WHERE username='$Username' AND password='$Password'");	
		
	
		if($result) 
		{
			if(mysqli_num_rows($result) == 1) 
			{
				$_SESSION['Username'] = $Username;
				$_SESSION['logininfo'] = "1";
				header ("Location: LoggedIn.php");
			}		
			else
			{
				header ("Location: Index.php?LoginError=Error!Invalid Username or Password.");
			}
		}
	}
	else
	{
		header ("Location: Index.php?LoginError=Error!Username, Password required");
	}
?>

