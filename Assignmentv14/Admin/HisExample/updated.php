<?php

	include_once("databaselogin.php");

	$id = $_POST['id'];
	$name = trim($_POST['name']);
	$phone = trim($_POST['phone']);
	$address = trim($_POST['address']);
	$imagePath =trim($_POST['imagepath']);
	
	$update = "UPDATE tblcontacts SET name = '$name', phone = '$phone', address = '$address',image_id = '$imagePath' WHERE id = '$id' ";
	$rsUpdate = mysql_query($update);
	header( 'Location:contacts.php' ) ;
?>