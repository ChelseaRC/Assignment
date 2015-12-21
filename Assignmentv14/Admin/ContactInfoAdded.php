<?php
require("SecurityChecks.php");
?>

<?php

	include_once("DatabaseLogin.php");
	
	$PhoneNo = trim($_POST['PhoneNo']);
	$Email = trim($_POST['Email']);
	$Location = trim($_POST['Location']);
		

$results = mysqli_query($con, "INSERT tblcontactinfo SET phone_no = '$PhoneNo', email = '$Email', location = '$Location'");

	
	
	if ($results)
	{
	   header( 'Location:ContactInformation.php' ) ;
	}
	else
	{
		echo "Error! Could not add to information to contact table";
	}
	mysqli_close($con);
?>