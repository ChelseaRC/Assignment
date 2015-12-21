<?php
require("SecurityChecks.php");
?>

<?php 
	include_once("DatabaseLogin.php");
	
	$id = $_GET['id'];
	
	mysqli_query($con,"DELETE FROM tblfacials WHERE id = '$id' ");
	mysqli_close($con);

	
	
	 header( 'Location:Facial.php' ) ;
?>
