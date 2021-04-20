<?php
include("left-nav.php");
require_once("config.php");
require_once("header.php");


echo "
<html>
	<body style=\"width: 100%;text-align: center;background-image:url('images/login_background.jpg');\";>
		<form name='update' action='userupdate.php"."' method='post' style='padding-left: 40%;padding-top: 10%;'>
			<table>
				<tr>
					<td><label>Email:</label></td>
					<td><input type='email' name='email'></td>
				</tr>
				<tr>
					<td><label>CurrentPassword:</label></td>
					<td><input type='currentPassword' name='currentPassword'></td>
				</tr>
				<tr>
					<td><label>New Password:</label></td>
					<td><input type='password' name='newPassword'></td>
				</tr>
				<tr>
					<td><label>Confirm Password:</label></td>
					<td><input type='password' name='confirmPassword'></td>
				</tr>
				<tr>
					<td></td>
					<td><input type='submit' value='Update' class='submit'></td>
				</tr>
			</table>
		</form>
	</body>
</html>";
?>

