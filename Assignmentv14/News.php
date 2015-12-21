<?php
require("SecurityChecks.php");
?>

<?php
require("LoggedInOrNotProductPage.php");
?>
<?php
 include_once("DatabaseLogin.php");
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="Css.css">
	<title>News</title>
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
			

		<h1>News</h1>
		
		<div id="DatabaseContent">
		<div id="NewsTable">
		<?php
$result = mysqli_query($con, "SELECT * FROM tblnews");
	
			
		echo "<table id='news'>";
				$icount = 0 ;
	  
	  	$result = mysqli_query($con,"SELECT * FROM tblnews");	
		while ($row=mysqli_fetch_row($result))
		{		
		  	$hieght = 60;
		  	$width = 75;
		  	$id = $row[0];		  	echo 
		  	"<tr>".  
		  			
		  			"<td id='Title'> " . $row[4]."</td>".
		  	"</tr>". 
		  		
			"<tr>".	
				 	"<td> "."<span>Posted By: </span>" .$row[2]."<span id='PostDate'> Post Date: </span>".$row[1] . "</td>".
		  	 	  	  	 	  	
			"</tr>". 				
					  	 	  	
		  	"<tr>".
		  	 	     
		  	 	      "<td> " . $row[3]."</td>".
		   "</tr>";
		  	echo "<tr>".
				
		  	 	  	"<td colspan='4'>&nbsp</td>".
		  	"</tr>";   	   	
		  	 	     

		  	 $icount++;
		  	
		   
		  }
		 		
		    echo "</table>";
		    
	 
		mysqli_close($con);
	
 	?>		</div>	
		</div>
		</div>
		</div>
		
<div id="Footer">
		<footer> Â©Copyright Chelsea Campbell 2015</footer>
		</div>


</body>
</html>
