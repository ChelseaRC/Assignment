<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['logininfo']);
	session_destroy();
	header ("Location: adminlogin.php");
?>

