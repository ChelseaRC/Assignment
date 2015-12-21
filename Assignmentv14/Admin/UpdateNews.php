<?
require("SecurityChecks.php");
?>

<!DOCTYPE html >
<html>

<head>
<link rel="stylesheet" type="text/css" href="AdminCss.Css">
<title>Update News Info</title>
</head>


<body>

<?php
	include_once("databaselogin.php");
	$id = $_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM tblnews WHERE id = '$id'  ");
	
	$row=mysqli_fetch_row($result);
	
	$Title = $row[4];
	$PostedBy = $row[2];
	$PostDate  = $row[1];
	$Article =$row[3];
?>


<div id="header">
<h1>Update News Info</h1>
	</div>
<div id="Content">
<div id="form">


<form id="UpdateNews" action="NewsUpdated.php" method="post" name="UpdateNews">
	
	Title:		<input id="Title" name="Title" type="text" required size="25" value="<?php echo $Title ?>" /><br/><br/>
	Posted By: 	<input id="PostedBy" name="PostedBy" type="text" required size="25" value="<?php echo $PostedBy ?>" /><br/><br/>
	Post Date: 	<input id="PostDate" name="PostDate" type="text" required size="25" value="<?php echo $PostDate ?>" /><br/><br/>
	Article: 	<textarea id="Article" name="Article" required rows="10" cols="25"><?php echo $Article ?></textarea><br/><br/>
				
					<input type="submit" name="SubmitButton" value="Update"/>
					<input type="hidden" name="id" value="<?php echo $id?>"/>

		
		
	</form>

	</div>
	</div>


</body>

</html>
