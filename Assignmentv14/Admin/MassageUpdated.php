<?php
require("SecurityChecks.php");
?>

<?php

	include_once("DatabaseLogin.php");

	$id = $_POST['id'];
	$Service = trim($_POST['Service']);
	$Price = trim($_POST['Price']);

	
	
	mysqli_query($con, "UPDATE tblmassage SET service = '$Service', price = '$Price' WHERE id = '$id' ");

	mysqli_close($con);

	header( 'Location:Massage.php' ) ;
?>