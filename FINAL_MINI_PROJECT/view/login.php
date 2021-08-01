<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
		<h3>Login Page</h3>

		<form method="post" action="../controller/loginCheck.php">
			<fieldset>
				<legend>Login</legend>
				<table>
					<tr>
						<td>User Id</td>
						<td><input type="id" name="id"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td></td>
					<td>
						<input type="checkbox" name="remember"> Remember Me 
						
					</td>
				</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Login"></td>
						<td><a href="registration.php">Register</a></td>
						
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>