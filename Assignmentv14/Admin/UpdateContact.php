<?
require("SecurityChecks.php");
?>

<!DOCTYPE html >
<html>

<head>
<link rel="stylesheet" type="text/css" href="AdminCss.Css">
<title>Update Contacts</title>
</head>


<body>

<?php
	include_once("databaselogin.php");
	$id = $_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM tblcontacts WHERE id = '$id'  ");
	
	$row=mysqli_fetch_row($result);
	
	$name = $row[1];
	$phone = $row[2];
	$address  = $row[3];
	$imagePath  = $row[4];
	
?>

<div id="header">
<h1>Update Contact Info</h1>
	</div>

<div id="Content">
<div id="form">


<form id="UpdateContact" action="ContactUpdated.php" method="post" name="UpdateContact">
	
	Name:			<input id="name" name="name" type="text" required size="25" value="<?php echo $name ?>" /><br/><br/>
	Phone:			<input id="phone" name="phone" type="text" required size="25" value="<?php echo $phone?>" /><br/><br/>
	Address:		<input id="address" name="address" type="text" required size="25" value="<?php echo $address ?>" /><br/><br/>
	Image Path:		<input id="imagepath" name="imagepath" type="text" required size="25" value="<?php echo $imagePath ?>" /><br/><br/>
		
					<input type="submit" name="SubmitButton" value="Update"/>
					<input type="hidden" name="id" value="<?php echo $id?>"/>

		
	</form>
	
		</div>
	</div>


</body>

</html>
