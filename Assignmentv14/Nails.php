<?php
require("SecurityChecks.php");
?>
<?php
 include_once("DatabaseLogin.php");
?>

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Css.css">
<title>Nails</title>
</head>

<body>
	<div id="Main">
		
		<div id="Header">
	

			<img src="Header2.jpg" alt="Header_Image" style="width:100%;height:300px">

		</div>
		
		
	<div id="Content">
	
	<h1>Nail Treatments</h1>
<div id="info">
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

<a href="Services.php">Back to Services</a>

</div>
</div>
</div>
</body>

</html>
