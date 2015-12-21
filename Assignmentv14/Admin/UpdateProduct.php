<?
require("SecurityChecks.php");
?>

<!DOCTYPE html >
<html>

<head>
<link rel="stylesheet" type="text/css" href="AdminCss.Css">
<title>Update Products</title>
</head>


<body>
<?php
	include_once("databaselogin.php");
	$id = $_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM tblproducts WHERE id = '$id'  ");
	
	$row=mysqli_fetch_row($result);
	
	$ProductName = $row[1];
	$ProductDetails = $row[2];
	$Price = $row [3];
	$ImagePath =$row[4];
?>

<div id="header">

<h1>Update Product Info</h1>
</div>

<div id="Content">
<div id="form">

<form id="ProductInfo" action="ProductUpdated.php" method="post" name="ProductInfo">
	
	Product Name:		<input id="ProductName" name="ProductName" type="text" required size="25" value="<?php echo $ProductName ?>" /><br/><br/>
	Product Details:	<textarea id="ProductDetails" name="ProductDetails" required rows="10" cols="30"><?php echo $ProductDetails?></textarea><br/><br/>
	Price:				<textarea id="Price" name="Price" required rows="5" cols="25"><?php echo $Price?></textarea><br/><br/>
	Image Path:			<input id="ImagePath" name="ImagePath" type="text" required size="25" value="<?php echo $ImagePath ?>" /><br/><br/>
		
					<input type="submit" name="SubmitButton" value="Update"/>
					<input type="hidden" name="id" value="<?php echo $id?>"/>
					

		
	</form>
	</div>
	</div>
	

</body>

</html>
