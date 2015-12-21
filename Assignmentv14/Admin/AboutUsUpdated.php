<?php
require("SecurityChecks.php");
?>

<?php

	include_once("DatabaseLogin.php");

	$id = $_POST['id'];
	$AboutUs = trim($_POST['AboutUs']);
		
	
	
	mysqli_query($con, "UPDATE tblaboutus SET aboutus = '$AboutUs' WHERE id = '$id' ");

	mysqli_close($con);


	header( 'Location:AboutUs.php' ) ;
?>