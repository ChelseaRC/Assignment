<?php
require("SecurityChecks.php");
?>

<?php

	include_once("DatabaseLogin.php");

	$id = $_POST['id'];
	$name = trim($_POST['name']);
	$phone = trim($_POST['phone']);
	$address = trim($_POST['address']);
	$imagePath =trim($_POST['imagepath']);
	
		
	mysqli_query($con, "UPDATE tblcontacts SET name = '$name', phone = '$phone', address = '$address',image_id = '$imagePath' WHERE id = '$id' ");

	mysqli_close($con);


	header( 'Location:Contacts.php' ) ;
?>