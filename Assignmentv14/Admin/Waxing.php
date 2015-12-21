<?php
require("SecurityChecks.php");
?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="AdminCss.Css">
<title>View/Edit Hair Removal Services</title>
<script type="text/javascript">
	
	function Confirm()
	{
	   var x = confirm("Are you sure you want to delete?");
	   if (x)
      	return true;
       else
    	return false;	
    }
	
</script>

<?php
 include_once("DatabaseLogin.php");
?>

</head>

<body>
<div id="Logout">
<a href="Logout.php">Logout</a>
</div>
	<div id="header">
	<h1>Hair Removal</h1>
	</div>
	
	
		<div id="Content">
		
			<div id="Nav">
	
	<ul id="Nav_Content">
	
	
			<li><a href="">Users</a>
	<ul>
		<li><a href="Contacts.php">View</a></li>
	</ul>
	
		
		<li><a href="">About Us</a>
	<ul>
		<li><a href="AboutUs.php">Edit</a></li>
	</ul>


	
		<li><a href="">Contact Info</a>
	<ul>
		<li><a href="ContactInformation.php">Edit</a></li>
		<li><a href="AddContactInfo.php">Add</a></li>
	</ul>

		
		
		<li><a href="">Products</a>
	<ul>		
		<li><a href="Products.php">Edit</a></li>
		<li><a href="AddProduct.php">Add</a></li>
	</ul>
	
		<li><a href="">Services</a>
	<ul>
		<li><a href="ServicesEdit.php">Edit</a></li>
		<li><a href="ServicesAdd.php">Add</a></li>
	</ul>

		<li><a href="">News</a>
	<ul>
		<li><a href="News.php">Edit</a></li>
		<li><a href="AddNews.php">Add</a></li>
	</ul>

</ul>
		</div>


<div id="info">
<h2>Womens Hair Removal</h2>
<?php


			$result = mysqli_query($con, "SELECT * FROM tblwaxing");
	
			
		echo "<table border='1' align='center' width='50%'>";
		echo "<tr>".
				"<th>Hair Removal Type</th><th>Cost</th><th>Update/Delete</th>".
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
		  	 	        "<td> <a href=\"UpdateWaxingW.php?id=$id\"> Update </a> - <a href=\"DeleteWaxingW.php?id=$id\" onclick='return Confirm();' >Delete</a></td>".

		  	     "<tr>";
		  	     
		  	 $icount++;
		  }
			echo "<tr><td colspan='5'> <a href='LoggedIn.php'>Return to Home page</a> </td> </tr>";	   
		   echo "</table>";
		    
	 
	
 	?> 
 	<br/><br/><br/><br/>
 	
<h2>Mens Hair Removal</h2>

 	<?php


			$result = mysqli_query($con, "SELECT * FROM tblwaxingmen");
	
			
		echo "<table border='1' align='center' width='50%'>";
		echo "<tr>".
				"<th>Hair Removal Type</th><th>Cost</th><th>Update/Delete</th>".
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
		  	 	        "<td> <a href=\"UpdateWaxingM.php?id=$id\"> Update </a> - <a href=\"DeleteWaxingM.php?id=$id\" onclick='return Confirm();' >Delete</a></td>".

		  	     "<tr>";
		  	     
		  	 $icount++;
		  }
			echo "<tr><td colspan='5'> <a href='LoggedIn.php'>Return to Home page</a> </td> </tr>";	   
		   echo "</table>";
		    
	 
		mysqli_close($con);
 	?> 



</div>
</div>

</body>

</html>
