<?php
require("SecurityChecks.php");
?>

<?php

	include_once("DatabaseLogin.php");
	
	$Title = trim($_POST['Title']);
	$PostedBy = trim($_POST['PostedBy']);
	$PostDate = trim($_POST['PostDate']);
	$Article = trim($_POST['Article']);
	

	
	$result = mysqli_query ($con, "INSERT INTO tblnews (posted_by, post_date, article, title) VALUES ('$PostedBy', '$PostDate', '$Article', '$Title')");
	
	
	if ($result)
	{
	   header( 'Location:News.php' ) ;
	}
	else
	{
		echo "Error! Could not add to information to contact table";
	}
	mysqli_close($con);
?>

