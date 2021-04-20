<?php

require_once("config.php");

require_once("header.php");

?>

<html>
<body style="background-image: url('images/login_background.jpg');">
				<form name='login' action='loginverification.php' method='post' style="padding-top: 15%;padding-left: 40%;">
					<table>
					<tr>
					<td><label>Username:</label></td>
					<td><input type='text' name='userName'></input></td>
				</tr>
				<tr>
					<td><label>Password:</label></td>
					<td><input type='password' name='password'></td>
				</tr>
				<tr>
					<td></td>
					<td><input type='submit' value='Login' class='submit'></td>
				</tr>
					</table>
				</form>
</body>
</html>

