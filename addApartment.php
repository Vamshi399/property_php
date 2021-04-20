<?php
include("left-nav.php");
?>
<html>
	<body style="width: 100%;text-align: center;background-image:url('images/login_background.jpg');";>
		<form name='insert' action='insertApartment.php' method='post' style='padding-left: 40%;' enctype='multipart/form-data'>
		
			<table>
				<tr>
					<td></td>
					<td>
					<h1>New Apartment Details</h1>
					</td>
				</tr>
				<tr>
					<td><label>Apartment Address:</label></td>
					<td><textarea id='aaddress' name='aaddress' rows='4' cols='50'></textarea></td>
				</tr>
				<tr>
					<td><label>Apartment Price:</label></td>
					<td><input type='text' name='aprice'></td>
				</tr>
				<tr>
					<td><label>Upload Image:</label></td>
					<td>
  						<input type='file' id='aimage' name='aimage'>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type='submit' value='Submit' class='submit'></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php 
require_once("config.php");

require_once("header.php");
?>

