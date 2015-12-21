<?php
require("LoggedInOrNot.php");
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="Css.css">
	<title>Please Login</title>
</head>

<body>

	
	<div id="Main">
		
		<div id="Header">

			<img src="Header2.jpg" alt="Header_Image" style="width:100%;height:300px">

		</div>

		
		<div id="Content">
		 
		 	 
			 	<div id="Nav">
			
					<ul id="Nav_Content">
	
						<li ><a href="Index.php">Home Page</a></li> 
						<li><a href="About_Us.php">About Us</a></li>
						<li><a href="News.php">News</a></li>
						<li><a href="">Products/Services</a>
						<ul>
							<li><a href="Products.php">Products</a></li>
							<li><a href="Services.php">Services</a></li>
						</ul>

						<li><a href="Contact_Us.php">Contact Us</a></li>
				
				
					</ul>

			
				</div>
			
			
		
		
			
			<div id="PleaseLogin">
			
			<p>You need to be logged in to view this page.</p><br/>
			
			<a href="Login.php">Login</a><br/>
			<a href="Register.php">Register</a><br/>
			<a href="Index.php">Back to homepage</a>


			
			
		 			</div>				
		</div>
		</div>
		<div id="Footer">
		<footer> ©Copyright Chelsea Campbell 2015</footer>
		</div>



</body>

</html>
