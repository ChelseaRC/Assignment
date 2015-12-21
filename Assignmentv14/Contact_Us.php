<?php
require("LoggedInOrNot.php");
?>

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Css.css">
<title>Contact Us</title>
<script type="text/javascript">

function ValidateForm()
		{
			var Name=document.forms["FormEmailUs"]["name"].value;
			var Email=document.forms["FormEmailUs"]["email"].value;
			var Phone=document.forms["FormEmailUs"]["phone"].value;
			var Message=document.forms["FormEmailUs"]["message"].value;

			
			if (Name==null|| Name=="")
			{
				alert("Please enter your name");
				document.getElementById("name").Focus();
				return false;
			}
			
			if (Email == null|| Email=="")
			{
				alert("Please enter a Email Address!");
				document.getElementById("email").Focus();
				return false;
			}
			
			if (Message==null|| Message=="")
			{
				alert("Please enter a Message");
				document.getElementById("message").Focus();
				return false;
			}


			
			if (Message == null|| Message=="")
			{
				alert("Please enter a Message");
				document.getElementById("message").Focus();
				return false;
			}

					
		}

</script>


</head>

<body>

<?php
		if(isset($_POST['submit']))
		{
	   		$to = "chizzelc@gmail.com";
	   		$subject = "IT6x30 Contact";
	   		
	   		$from= $_POST['email'];
	   		$email = $_POST['email'];
	   		$name= $_POST['name'];
	   		$phone= $_POST['phone'];
	   		
	   		$message = $name."\r\n".$phone."\r\n".$_POST['message'];
	  		$header = "From:$email \r\n";
	  		"Reply to : $from";
			
	   		$retval = mail ($to,$subject,$message,$header);
	   		if( $retval == true )  
	   		{
	   			echo "<script> alert('Email sent successfully....We will be in touch as soon as we can.')</script>";   		
	   		}
	   		else
	   		{
		      echo "<script> alert('Opsss !!!....Huston, we have a problemÃ¢â‚¬Â¦.Email did NOT go to target.');</script>";
		    }
		  }
	?>
	
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
			
			
			<h1>Contact Us</h1>			
			
			<div id="DatabaseStuff">	
			
		 		
<?php
include_once("DatabaseLogin.php");
		$result = mysqli_query($con, "SELECT * FROM tblcontactinfo");
	
			
		echo "<table>";
				$icount = 0 ;
	  
	  	$result = mysqli_query($con,"SELECT * FROM tblcontactinfo");	
		while ($row=mysqli_fetch_row($result))
		{		
		  	$hieght = 60;
		  	$width = 75;
		 
		  	$id = $row[3];
		  	
		  	echo 
		  	"<tr>".  
		  			"<td> Phone Number:      </td>".
		  			"<td> " . $row[0]."</td>".
		  	"</tr>". 
		  		
			"<tr>".	
					"<td> Email: </td>".

		  	 	  	"<td> " .$row[1]. "</td>".
		  	 	  	  	 	  	
			"</tr>". 				
			"<tr>".
					"<td> Location: </td>".
		  	 	   "<td> "."<textarea id='box' readonly rows='5' cols='30'>". $row[2]."</textarea>"."</td>".

		  	"</tr>";
		  	 	  	
		  		  	 $icount++;
		  }
		

		   
		   echo "</table>";
	 
		mysqli_close($con);
 	?> 
	</div> 		
	 		
	 		
	 <div id="contact">	
	 
<h3>Have any questions?<br/> Feel free to send us a message here.</h3>	
	 		
<form name="FormEmailUs" id="FormEmailUs"action="<?php echo $_SERVER['php_SELF'];?>" method="post" onsubmit="return validateForm()">
<p>Name:</p> <input type="text" name="name" id="name">
<p>Email:</p> <input type="email" name="email" id="email">
<p>Phone:</p> <input type="text" name="phone" id="phone">



<p>Message</p><textarea name="message" id="message" rows="6" cols="25"></textarea><br />
<input type="submit" name="submit" value="Send"><input type="reset" value="Clear">
</form>

	</div> 		
	 		
	 		
						
		</div>
		<div id="Footer">
		<footer> Â©Copyright Chelsea Campbell 2015</footer>
		</div>
	</div>
	

</body>

</html>
