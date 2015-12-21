
<?php

	include_once("databaselogin.php");
	session_start();

	$Uname = $_POST['username'];
	$PWord = $_POST['password'];
	
	//Serverside validation
	if ($Uname && $PWord)
	{
		//Create query
		$query ="SELECT * FROM tbladmin WHERE Username='$Uname' AND Password='$PWord'";
		
		$result=mysql_query($query);
	
		//Check whether the query was successful or not
		if($result) 
		{
			if(mysql_num_rows($result) == 1) 
			{
				$_SESSION['username'] = $Uname;
				$_SESSION['logininfo'] = "1";
				header ("Location: AdminIndex.php");
			}		
			else
			{
				header ("Location: adminlogin.php?LoginError=Error!Invalid Username or Password.");
			}
		}
	}
	else
	{
		header ("Location: adminlogin.php?LoginError=Error!Username, Password required");
	}
?>