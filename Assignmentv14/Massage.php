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
<title>Massages</title>
</head>

<body>
	<div id="PriceList">
	<h1>Massages</h1>

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
	 
		mysqli_close($con);
 	?> 
<a href="Services.php">Back to Services</a>

</div>


</body>

</html>

