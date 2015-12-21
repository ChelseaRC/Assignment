<?php
require("SecurityChecks.php");
?>

<?php

	include_once("DatabaseLogin.php");

	$id = $_POST['id'];
	$PhoneNo = trim($_POST['PhoneNo']);
	$Email = trim($_POST['Email']);
	$Location = trim($_POST['Location']);
	
	
	mysqli_query($con, "UPDATE tblcontactinfo SET phone_no = '$PhoneNo', email = '$Email', location = '$Location' WHERE id = '$id' ");

	mysqli_close($con);

	header( 'Location:ContactInformation.php' ) ;
?>