<?php
//Access only via login
require("securitycheck.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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
<h2>Add new Contact</h2>
<form id="FormName" action="added.php" method="post" name="FormName">
	<table >
			<tr>
			<td>Name</td>
			<td><input id="name" name="name" type="text" size="25" value="" /></td>
		</tr>
		<tr>
			<td >Phone</td>
			<td><input id="phone" name="phone" type="text" size="25" value="" /></td>
		</tr>
		<tr>
			<td> Address</td>
			<td><input id="address" name="address" type="text" size="25" value="" /></td>
		</tr>
		<tr>
			<td> Image file name</td>
			<td><input id="imagepath" name="imagepath" type="text" size="25" value="" maxlength="50"/></td>
		</tr>
		<tr>
			<td colspan="2">
			<input type="submit" name="submitButtonName" value="Add contact"/></td>
		</tr>
	</table>
	
</form>
</body>

</html>
