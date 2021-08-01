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
					<td>Id</td>
					<td><input type="id" name="id"></td>
					<td></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
					<td></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="confirm password"></td>
					<td></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
					<td></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
					<td></td>
				</tr>
				<tr>
					<td>Type</td>
					<td>
						<select name="type">
							<option value="user">User</option>
							<option value="admin">Admin</option>
							
						</select>
					</td>
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