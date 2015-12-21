<?php
require("SecurityChecks.php");
?>

<?php

	include_once("DatabaseLogin.php");
	
	$Service = trim($_POST['Service']);
	$Price = trim($_POST['Price']);
		

$results = mysqli_query($con, "INSERT tblfacials SET service = '$Service', price = '$Price'");

	
	
	if ($results)
	{
	   header( 'Location:Facials.php' ) ;
	}
	else
	{
		echo "Error! Could not add to information to contact table";
	}
	mysqli_close($con);
?>