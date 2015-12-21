<?php 
	include_once("databaselogin.php");
	
	$id = $_GET['id'];
	
	$delete = "DELETE FROM tblcontacts WHERE id = '$id' ";
	mysql_query($delete);
	
	
	 header( 'Location:contacts.php' ) ;
?>

