<!DOCTYPE html>
<html>

<head>
	<style type="text/css">
	.auto-style1 {
	text-align: center;
	}
	.auto-style2 {
		text-align: center;
		color: #FF0000;
	}
	</style>
</head>

<body>
	<!--This form used to send username & password to Validatelogin.php to authenticate user-->
	<form method="post" action="../His%20Example/Validatelogin.php">
		<table style="margin:auto">
			<tr>
				<td colspan="2" class="auto-style1"><h2>Admin Login</h2></td>
			</tr>
			<tr>
				<td><strong>Username</strong></td>
				<td><strong><input name="username" type="text"></strong></td>
			</tr>
			<tr>
				<td><strong>Password</strong></td>
				<td><input name="password" type="password"></td>
			</tr>
			<tr>
				<td colspan="2" class="auto-style2" ><?php if (isset($_GET['LoginError'])) {echo $_GET['LoginError'];}?></td>
			</tr>

			<tr>
				<td colspan="2" class="auto-style1"><input type="submit" value="Log in"></td>
			</tr>
		</table>
	</form>

</body>
</html>