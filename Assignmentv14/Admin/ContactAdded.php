<?php
require("SecurityChecks.php");
?>

<?php

	include_once("DatabaseLogin.php");
	
	$Name = trim($_POST['Name']);
	$Phone = trim($_POST['Phone']);
	$Address = trim($_POST['Address']);
	
	mysqli_query($con,"INSERT INTO tblcontacts(name, phone, address) VALUES ('$Name', '$Phone', '$Address')");

	$ImagePathID= mysqli_insert_id($con); 

	
	$query = "UPDATE tblcontacts SET image_id = '$ImagePathID.jpg' WHERE id = '$ImagePathID' ";
	
	mysqli_query($con,$query);
	mysqli_close($con);
	
	
	
