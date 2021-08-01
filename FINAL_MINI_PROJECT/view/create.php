<?php
	$title="View Users";
	include 'header.php';

?>

	<h1>User's</h1>

	<nav>
		<a href="home.php">Go Home</a> |
	</nav>
	
	<br>
	<div>
		<form method="post" action="../controller/userController.php">
			<fieldset>
				<table>
					<tr>
						<td>Id</td>
						<td><input type="id" name="id"></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>User Type</td>
						<td><input type="user" name="type"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="create" value="Create"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<br>
	<br>

