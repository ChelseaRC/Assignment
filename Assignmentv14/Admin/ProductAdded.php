
<?php

	include_once("DatabaseLogin.php");
	
	$ProductName = trim($_POST['ProductName']);
	$ProductDetails = trim($_POST['ProductDetails']);
	$Price = trim($_POST['Price']);
	
	mysqli_query($con,"INSERT INTO tblproducts(product_name, product_details, price) VALUES ('$ProductName', '$ProductDetails', '$Price')");

	$ImagePathID= mysqli_insert_id($con); 
	

	$query = "UPDATE tblproducts SET image_id = '$ImagePathID.jpg' WHERE id = '$ImagePathID' ";
	
	mysqli_query($con,$query);
	mysqli_close($con);
	

		
	mysqli_query($con,$query);
	mysqli_close($con);
	
	
	
	$id = 	$ImagePathID;
	
	$target_dir = "image/Products/";
	$target_file = $target_dir .$id.".jpg"; //This will rename the picture to record id.jpg

	//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) 
	{
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) 
	    {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } 
	    else 
	    {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	
	// Check if file already exists
	if (file_exists($target_file)) 
	{
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) 
	{
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
	{
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) 
	{
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} 
	else 
	{
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
	    {
		    //redirect to contact.php page after a successful image upload 
 			header ("Location: Products.php");
	    } 
	    else 
	    {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
?>




