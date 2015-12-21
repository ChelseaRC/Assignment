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
	<title>Home Page</title>
</head>

<body>



	<div id="Main">

		<div id="Header">

			<img src="Header2.jpg" alt="Header_Image" style="width:100%;height:300px">

		</div>
			
				
			<div id="Content" style="height:500px; overflow:auto">
		
			 
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
			
			 		


<div id="PopUp">


<div class="box">
<h3>Massages</h3>
	<a href="#popup1"><img class="button"  src="Massage.jpg" alt="Massage" style="height:175px; width:224px; border-radius: 30px 30px 30px 30px;"></a>
</div>

<div class="box">
<h3>Hair Removal</h3>
		<a href="#popup2"><img class="button"  src="Waxing.jpg" alt="Hair Removal" style="height:175px; width:224px; border-radius: 30px 30px 30px 30px;"></a>
</div>

<div class="box">
<h3>Facials</h3>
		<a href="#popup3"><img class="button"  src="Facials.jpg" alt="Facials" style="height:175px; width:224px; border-radius: 30px 30px 30px 30px;"></a></div>

<div class="box">
<h3>Nail Treatments</h3>
	<a href="#popup4"><img class="button"  src="Nails.jpg" alt="Nail Treatments" style="height:175px; width:224px; border-radius: 30px 30px 30px 30px;"></a>
</div>



<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Massages</h2>
		<a class="close" href="#">×</a>
		<div class="content">
		<?php

		$result = mysqli_query($con, "SELECT * FROM tblmassage");
	
			
		echo "<table border='1' align='center' width='50%'>";
		echo "<tr>".
				"<th>Massage Type</th><th>Cost</th>".
			  "</tr>";
		$icount = 0 ;
	  
	  	$result = mysqli_query($con,"SELECT * FROM tblmassage");	
		while ($row=mysqli_fetch_row($result))
		{		
		  	$hieght = 60;
		  	$width = 75;
		 
		  	$id = $row[0];
		  	echo "<tr>".  
		  	 	  	 "<td> ".$row[1] . "</td>".
		  	 	     "<td> " .$row[2]. "</td>".
		  	     "<tr>";
		  	 $icount++;
		  }
				   
		   echo "</table>";
	 

 	?> 
		</div>
	</div>
</div>

<div id="popup2" class="overlay">
	<div class="popup">
		<h2 style="text-align: center">Womens Hair Removal</h2>
		<a class="close" href="#">×</a>
		<div class="content">
			<?php

		$result = mysqli_query($con, "SELECT * FROM tblwaxing");
	
			
		echo "<table border='1' align='center' width='50%'>";
		echo "<tr>".
				"<th>Hair Removal Type</th><th>Cost</th>".
			  "</tr>";
		$icount = 0 ;
	  
	  	$result = mysqli_query($con,"SELECT * FROM tblwaxing");	
		while ($row=mysqli_fetch_row($result))
		{		
		  	$hieght = 60;
		  	$width = 75;
		 
		  	$id = $row[0];
		  	echo "<tr>".  
		  	 	  	 "<td> ".$row[1] . "</td>".
		  	 	     "<td> " .$row[2]. "</td>".
		  	     "<tr>";
		  	 $icount++;
		  }
				   
		   echo "</table>";
	 
		
 	?> <br/><br/>

<h2 style="text-align: center">Mens Hair Removal</h2>

<?php

		$result = mysqli_query($con, "SELECT * FROM tblwaxingmen");
	
			
		echo "<table border='1' align='center' width='50%'>";
		echo "<tr>".
				"<th>Hair Removal Type</th><th>Cost</th>".
			  "</tr>";
		$icount = 0 ;
	  
	  	$result = mysqli_query($con,"SELECT * FROM tblwaxingmen");	
		while ($row=mysqli_fetch_row($result))
		{		
		  	$hieght = 60;
		  	$width = 75;
		 
		  	$id = $row[0];
		  	echo "<tr>".  
		  	 	  	 "<td> ".$row[1] . "</td>".
		  	 	     "<td> " .$row[2]. "</td>".
		  	     "<tr>";
		  	 $icount++;
		  }
				   
		   echo "</table>";
	 
		 	?> 
		</div>
	</div>
</div>

<div id="popup3" class="overlay">
	<div class="popup">
		<h2>Facials</h2>
		<a class="close" href="#">×</a>
		<div class="content">
			<?php


		$result = mysqli_query($con, "SELECT * FROM tblfacials");
	
			
		echo "<table border='1' align='center' width='50%'>";
		echo "<tr>".
				"<th>Facial Type</th><th>Cost</th>".
			  "</tr>";
		$icount = 0 ;
	  
	  	$result = mysqli_query($con,"SELECT * FROM tblfacials");	
		while ($row=mysqli_fetch_row($result))
		{		
		  	$hieght = 60;
		  	$width = 75;
		 
		  	$id = $row[0];
		  	echo "<tr>".  
		  	 	  	 "<td> ".$row[1] . "</td>".
		  	 	     "<td> " .$row[2]. "</td>".
		  	     "<tr>";
		  	 $icount++;
		  }
				   
		   echo "</table>";
	 
		
 	?> 
		</div>
	</div>
</div>

<div id="popup4" class="overlay">
	<div class="popup">
		<h2>Nail Treatments</h2>
		<a class="close" href="#">×</a>
		<div class="content">
			<?php

		$result = mysqli_query($con, "SELECT * FROM tblnails");
	
			
		echo "<table border='1' align='center' width='50%'>";
		echo "<tr>".
				"<th>Nail Treatment Type</th><th>Cost</th>".
			  "</tr>";
		$icount = 0 ;
	  
	  	$result = mysqli_query($con,"SELECT * FROM tblnails");	
		while ($row=mysqli_fetch_row($result))
		{		
		  	$hieght = 60;
		  	$width = 75;
		 
		  	$id = $row[0];
		  	echo "<tr>".  
		  	 	  	 "<td> ".$row[1] . "</td>".
		  	 	     "<td> " .$row[2]. "</td>".
		  	     "<tr>";
		  	 $icount++;
		  }
				   
		   echo "</table>";
	 
		mysqli_close($con);
 	?> 

		</div>
	</div>
</div>


</div>


				</div>
		</div>		
					
			
		<div id="Footer">
		<footer> ©Copyright Chelsea Campbell 2015</footer>
		</div>

	
		   
		
</body>

</html>
