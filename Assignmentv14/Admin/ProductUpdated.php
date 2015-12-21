<?php
require("SecurityChecks.php");
?>

<?php

	include_once("DatabaseLogin.php");

	$id = $_POST['id'];
	$ProductName = trim($_POST['ProductName']);
	$ProductDetails = trim($_POST['ProductDetails']);
	$Price = trim($_POST['Price']);
	$ImagePath =trim($_POST['ImagePath']);
	
		
	mysqli_query($con,"UPDATE tblproducts SET product_name = '$ProductName', product_details = '$ProductDetails', price = '$Price',image_id = '$ImagePath' WHERE id = '$id' ");

	mysqli_close($con);

	header( 'Location:Products.php' ) ;
?>