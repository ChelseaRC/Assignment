<?php
require("SecurityChecks.php");
?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="AdminCss.Css">
<title>Add Product</title>
</head>

<body>
	
	<div id="header">
	<h1>Add a new Product</h1>
	</div>
	
	<div id="Content">
	<div id="form">
	
	<form id="AddProduct" action="ProductAdded.php" method="post" name="AddProduct" enctype="multipart/form-data">
		
	Product Name:		<input id="ProductName" name="ProductName" type="text" required size="25" value="" /><br/><br/>
	Product Details:	<textarea id="ProductDetails" name="ProductDetails" required rows="10" cols="30"></textarea><br/><br/>
	Price:				<textarea id="Price" name="Price" required rows="5" cols="25"></textarea><br/><br/>
	Select image to upload:
			<input type="file" name="fileToUpload" id="fileToUpload"/><br/><br/>
	
						<input type="submit" name="SubmitButton" value="Add Product"/>

	
	</form>
	</div>
	</div>


</body>

</html>
