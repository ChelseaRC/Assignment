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
	$result = mysqli_query($con,"SELECT * FROM tblaboutus WHERE id = '$id'  ");
	
	$row=mysqli_fetch_row($result);
	
	$AboutUs = $row[1];
?>

<div id="header">
<h1>Update Contact Information</h1>
	</div>

<div id="Content">
<div id="form">


<form id="UpdateAboutUs" action="AboutUsUpdated.php" method="post" name="UpdateAboutUs">
	
	Description:		<textarea id="AboutUs" name="AboutUs" required rows="20" cols="50"><?php echo $AboutUs ?></textarea> <br/><br/><br/><br/>
					
					<input type="submit" name="SubmitButton" value="Update"/>
					<input type="hidden" name="id" value="<?php echo $id?>"/>

		
	</form>
	
		</div>
	</div>


</body>

</html>
