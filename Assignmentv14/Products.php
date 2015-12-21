<?php
require("SecurityChecks.php");
?>
<?php
require("LoggedInOrNotProductPage.php");
?>



<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Css.css">
<title>Products/Services</title>
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
			

				<h1>Products/Services</h1>
				
				<div id="Products">
		
				 				
 				<?php
 				 include_once("DatabaseLogin.php");
		$result = mysqli_query($con, "SELECT * FROM tblproducts");
	
			
		echo "<table>";
		echo "<tr>".
				"<th>Product Name</th><th></th><th>Description</th><th>Price</th>".
			  "</tr>";

			$icount = 0 ;
	  
	  	$result = mysqli_query($con,"select * from tblproducts");	
		while ($row=mysqli_fetch_row($result))
		{		
		  	$hieght = 200;
		  	$width = 225;
		  	$imagepath = $row[4];
		  	$id = $row[0];
		  	echo "<tr>".  
		  	 	  	 "<td> ".$row[1] . "</td>".
		  	 	  	  "<td><img src=\"Admin/image/Products/$imagepath\"  height=".$hieght." width=".$width."></td>".
		  	 	    "<td> " ."<textarea id='box' readonly rows='10' cols='30'>".$row[2]."</textarea>"."</td>".
		  	 	     "<td> " ."<textarea id='box' readonly rows='5' cols='20'>". $row[3]."</textarea>"."</td>".
		  	 	    
		  	        		  	     "<tr>";
		  	 $icount++;
		  }
		 		  
		   
		   echo "</table>";
	 
		mysqli_close($con);
 	?> 

			
				</div>
			</div>
			</div>
		<div id="Footer">
		<footer> ©Copyright Chelsea Campbell 2015</footer>
		</div>
	
		

</body>

</html>
