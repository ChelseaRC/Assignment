<?php
require("SecurityChecks.php");
?>

<?php 
	include_once("DatabaseLogin.php");
	
	$id = $_GET['id'];
	
	mysqli_query($con,"DELETE FROM tblmassage WHERE id = '$id' ");
	mysqli_close($con);

	
	
	 header( 'Location:Massage.php' ) ;
?>
