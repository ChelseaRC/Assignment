<?php

require("SecurityChecks.php");

	session_start();
	
		unset($_SESSION['logininfo']);
	session_destroy();
	header ("Location: Index.php");
?>
