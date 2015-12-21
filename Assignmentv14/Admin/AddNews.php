<?php
require("SecurityChecks.php");
?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="AdminCss.Css">
<title>Add News</title>
</head>

<body>
	
	<div id="header">
	<h1>Add a new News article</h1>
	</div>
	
	<div id="Content">
	<div id="form">
	
	<form id="AddNews" action="NewsAdded.php" method="post" name="AddNews">
	
	Title:		<input id="Title" name="Title" type="text" required size="25" value="" /><br/><br/>
	Posted By: 	<input id="PostedBy" name="PostedBy" type="text" required size="25" value="" /><br/><br/>
	Post Date: 	<input id="PostDate" name="PostDate" type="text" required size="25" value="" /><br/><br/>
	Article: 	<textarea id="Article" name="Article" required rows="10" cols="25"></textarea><br/><br/>
				<input type="submit" name="SubmitButton" value="Add article"/>
	
	</form>
	
	</div>
	</div>


</body>

</html>
