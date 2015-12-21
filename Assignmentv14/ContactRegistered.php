<?php

	include_once("DatabaseLogin.php");
	
	$Name = trim($_POST['Name']);
	$Phone = trim($_POST['Phone']);
	$Address = trim($_POST['Address']);
		$Username =trim($_POST['Username']);
	$Password =trim($_POST['Password']);

$results = mysqli_query($con, "INSERT tblcontacts SET name = '$Name', phone = '$Phone', address = '$Address', username = '$Username', password = '$Password'");

	
	
	if ($results)
	{
	   header( 'Location:Index.php' ) ;
	}
	else
	{
		echo "Error! Could not add to information to contact table";
	}
	mysqli_close($con);
?>