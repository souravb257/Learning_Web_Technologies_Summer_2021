<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<h3>Registration Page</h3>
<div>
	<form method="post" action="../controller/registrationCheck.php">
		<fieldset>
			<legend>Registration</legend>
			<table>
				<tr>
					<td>Employer Name</td>
					<td><input type="text" name="name"></td>
					<td></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="cname"></td>
					<td></td>
				</tr>
				<tr>
					<td>Contact no.</td>
					<td><input type="number" name="contact"></td>
					<td></td>
				</tr>
				<tr>
					<td>User Name</td>
					<td><input type="text" name="username"></td>
					<td></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" name="password"></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Register"></td>
					<td><a href="login.php">Login</a></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
</body>
</html>