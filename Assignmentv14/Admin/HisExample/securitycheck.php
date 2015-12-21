<?php
	session_start();
	if (!isset($_SESSION['logininfo'])) 
	{
	     header("Location:adminlogin.php");
	     die();     // End everything
	}
?>
