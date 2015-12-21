<?php
require("SecurityChecks.php");
?>

<?php

	include_once("DatabaseLogin.php");

	$id = $_POST['id'];
	$Title = trim($_POST['Title']);
	$PostedBy = trim($_POST['PostedBy']);
	$PostDate = trim($_POST['PostDate']);
	$Article = trim($_POST['Article']);
	
	
		
	mysqli_query($con,"UPDATE tblnews SET title = '$Title', posted_by = '$PostedBy', post_date = '$PostDate', article = '$Article' WHERE id = '$id' ");

	mysqli_close($con);

	
	header( 'Location:News.php' ) ;
?>