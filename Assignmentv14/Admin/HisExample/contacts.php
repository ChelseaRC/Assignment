<?php
//Access only via login
require("securitycheck.php");
?>

<!DOCTYPE>
<html>
<head>
<title>Untitled 1</title>

<style type="text/css">
	.auto-style1 {
		text-align: center;
	}
</style>


<script type="text/javascript">
	<!--
	function Confirm()
	{
	   var x = confirm("Are you sure you want to delete?");
	   if (x)
      	return true;
       else
    	return false;	
    }
	//-->
</script>
<?php
 include_once("databaselogin.php");
?>

</head>
<body>
	<div class="auto-style1">
		<h1 >Contact List</h1>
		<span style="position: absolute;left:90%;top: 25px;">
		<a href="Logout.php">Logout</a>
		</span>
	</div>

	
	
	<?php
		$result = mysql_query("SELECT * FROM tblContacts");
		$num = mysql_num_rows ($result);
		
		echo "<table border='1' align='center' width='50%'>";
		echo "<tr>".
				"<th>Name</th><th>Phone</th><th>Address</th><th>Image</th><th>Update/Delete</th>".
			  "</tr>";
		$icount = 0 ;
	  
		while ($icount < $num)
		{
		  	 $hieght = 75;
		  	 $width = 95;
		  	 $imagepath = mysql_result($result,$icount,"image_id");
		  	 $id = mysql_result($result,$icount,"id");
		  	 echo "<tr>".  
		  	 	  	 "<td> ".mysql_result($result,$icount,"name") . "</td>".
		  	 	     "<td> " .mysql_result($result,$icount,"phone"). "</td>".
		  	 	     "<td> " . mysql_result($result,$icount,"address")."</td>".
		  	 	     "<td align='center'><img src=\"image/$imagepath\"  height=".$hieght." width=".$width."></td>".
		  	         "<td align='center'> <a href=\"update.php?id=$id\"> Update </a> - <a href=\"delete.php?id=$id\" onclick='return Confirm();' >Delete</a></td>".
		  	     "<tr>";
		  	 $icount++;
		  	}
		   echo "<tr><td colspan='5' align='center'> You have ".$icount." freinds in your contact table </td> </tr>";
		   echo "<tr><td colspan='5' align='center'> <a href='adminindex.php'>Go to Home page</a> </td> </tr>";
		   
		   echo "</table>";
	 
		mysql_close();
 	?> 
</body>
</html>
