<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
	<h3>Change Password</h3>
<div>
	<form method="post" action="../controller/registrationCheck.php">
		<fieldset>
			<legend>Change Password</legend>
			<table>
				<tr>
					<td>Current Password</td>
					<td><input type="password" name="password"></td>
					<td></td>
				</tr>
				<tr>
					<td>NewPassword</td>
					<td><input type="password" name="password"></td>
					<td></td>
				</tr>
				<tr>
					<td>Retype New Password</td>
					<td><input type="password" name="password"></td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Change"></td>
					<td><a href="home.php">Home</a></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
</body>
</html>