<?php
//Access only via login
require("securitycheck.php");
?>

<!DOCTYPE html >
<html >

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.auto-style1 {
	text-align: right;
}
</style>
</head>
<body>
<?php
	include_once("databaselogin.php");
	$id = $_GET['id'];
	$qP = "SELECT * FROM tblContacts WHERE id = '$id'  ";
	$rsP = mysql_query($qP);
	$row = mysql_fetch_array($rsP);
	extract($row);
	$name = trim($name);
	$phone = trim($phone);
	$address = trim($address);
	$imagePath =trim($image_id);
?>
<h2>Update Contact Info</h2>
<form id="FormName" action="updated.php" method="post" name="FormName">
	<table >
		<tr>
			<td >Name</td>
			<td><input id="name" name="name" type="text" size="25" value="<?php echo $name ?>" /></td>
		</tr>
		<tr>
			<td >Phone</td>
			<td><input id="phone" name="phone" type="text" size="25" value="<?php echo $phone?>" /></td>
		</tr>
		<tr>
			<td> Address </td>
			<td><input id="address" name="address" type="text" size="25" value="<?php echo $address ?>" /></td>
		</tr>
		<tr>
			<td >image path</td>
			<td> <input id="imagepath" name="imagepath" type="text" size="25" value="<?php echo $imagePath ?>" /></td>
		</tr>
		<tr>
		<td colspan="2">
			<input type="submit" name="submitButtonName" value="Update"/>
			<input type="hidden" name="id" value="<?php echo $id?>"/></td>
		</tr>
	</table>
</form>

</body>

</html>
