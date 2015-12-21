<?php

	session_start();
	if (!isset($_SESSION['logininfo'])) 
	{
	     header("Location:Index.php");
	     die();   
	}
?>
