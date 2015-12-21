<?
require("Untitled_1.phpUntitled_1.phpSecurityChecks.php");
?>

<!DOCTYPE html >
<html>

<head>
<link rel="stylesheet" type="text/css" href="AdminCss.Css">
<title>Update Facials</title>
</head>


<body>

<?php
	include_once("databaselogin.php");
	$id = $_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM tblfacials WHERE id = '$id'  ");
	
	$row=mysqli_fetch_row($result);
	
	$Service = $row[1];
	$Price = $row[2];
	?>


<div id="header">
<h1>Update Facial Info</h1>
	</div>
<div id="Content">
<div id="form">


<form id="UpdateFacial" action="FacialUpdated.php" method="post" name="UpdateFacial">
	
	Service:		<input id="Service" name="Service" type="text" required size="25" value="<?php echo $Service ?>" /><br/><br/>
	Price: 	<input id="Price" name="Price" type="text" required size="25" value="<?php echo $Price ?>" /><br/><br/>
				
					<input type="submit" name="SubmitButton" value="Update"/>
					<input type="hidden" name="id" value="<?php echo $id?>"/>

		
		
	</form>

	</div>
	</div>


</body>

</html>
