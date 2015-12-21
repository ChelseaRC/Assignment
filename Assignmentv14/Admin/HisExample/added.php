<?php

	include_once("databaselogin.php");
	
	$name = trim($_POST['name']);
	$phone = trim($_POST['phone']);
	$address = trim($_POST['address']);
	$imagePath =trim($_POST['imagepath']);
	
	$query = "INSERT INTO tblcontacts(name, phone, address,image_id) VALUES ('$name', '$phone', '$address','$imagePath')";
	$results = mysql_query($query);
	
	if ($results)
	{
	   header( 'Location:adminindex.php' ) ;
	}
	else
	{
		echo "Error! Could not add to information to contact table";
	}
	mysql_close();
?>