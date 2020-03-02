<?php 
	mysql_connect("localhost", "root", "") or die (mysql_error());
	mysql_select_db("registration") or die (mysql_error());	
?>

<!--
<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
</head>
<body>
	<form method="post" action="register.php">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" class="textInput"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" class="textInput"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" class="textInput"></td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="password" name="password2" class="textInput"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="register_btn" value="Register"></td>
			</tr>
		</table>
			<p><a href="login.php"></a> SIGN IN</p>
	</form>

</body>
</html> -->