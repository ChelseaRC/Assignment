
<?php
//Access only via login
require("securitycheck.php");
?>


<!DOCTYPE html>
<html>
	<!--This is a password protected page and can only be accessed after successful login
	securitycheck.php script at top of this page will protect this page and redirect user 
	to adminlogin.php page if they attempt to view this page without login first. -->
	<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Untitled 1</title>
	<style type="text/css">
	.auto-style1 {
		text-align: center;
	}
	</style>
	</head>
	<body>
	<div class="auto-style1">
		<h1 >Admin Home Page</h1>
		<span style="position: absolute;left:90%;top: 25px;">
		<a href="Logout.php">Logout</a>
		</span>
	</div>
	
		<p/>
		<b>Welcome <?php echo $_SESSION['username'];?>, choose from following options:</b>
		<ol>
		<li><a href="contacts.php"> View / Update / Delete contact  </a></li>
		<br/><br/>
		<li><a href="addcontact.php"> Add a new contact  </a></li>
	</ol>		
	</body>
</html>