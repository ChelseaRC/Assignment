<?php
require("SecurityChecks.php");
?>

<!DOCTYPE html >
<html>

<head>
<link rel="stylesheet" type="text/css" href="AdminCss.Css">
<title>Update Contact Information</title>
</head>


<body>

<?php
	include_once("databaselogin.php");
	$id = $_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM tblcontactinfo WHERE id = '$id'  ");
	
	$row=mysqli_fetch_row($result);
	
	$PhoneNo = $row[0];
	$Email = $row[1];
	$Location  = $row[2];
	
?>

<div id="header">
<h1>Update Contact Information</h1>
	</div>

<div id="Content">
<div id="form">


<form id="UpdateContactInfo" action="ContactInfoUpdated.php" method="post" name="UpdateContactInfo">
	
	PhoneNo:		<input id="PhoneNo" name="PhoneNo" type="text" required size="25" value="<?php echo $PhoneNo ?>" /><br/><br/>
	Email: 			<input id="Email" name="Email" type="email" required size="25" value="<?php echo $Email ?>" /><br/><br/>
	Location: 		<textarea id="Location" name="Location"  required rows="5" cols="25"><?php echo $Location ?></textarea><br/><br/>
					
					<input type="submit" name="SubmitButton" value="Update"/>
					<input type="hidden" name="id" value="<?php echo $id?>"/>

		
	</form>

	</div>
	</div>

</body>

</html>
