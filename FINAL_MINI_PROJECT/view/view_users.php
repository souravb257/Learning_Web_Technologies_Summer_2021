<?php
	$title="View Users";
	include 'header.php';
	require_once('../model/usersModel.php');
	$users = getAllUser();
?>

	<h1>User List</h1>

	<nav>
		<a href="home.php">Go Home</a> |
	</nav>
	
	<br>

	<div>
		<table border="1">
			<tr>
				<td>ID</td>
				<td>Password</td>
				<td>Name</td>
				<td>Email</td>
				<td>Type</td>
			</tr>

			<?php  for($i=0; $i<count($users); $i++){ ?>
				<tr>
					<td><?=$users[$i]['id']?></td>
					<td><?=$users[$i]['password']?></td>
					<td><?=$users[$i]['name']?></td>
					<td><?=$users[$i]['email']?></td>
					<td><?=$users[$i]['type']?></td>
					<td>
					</td>
				</tr>
			<?php } ?>
			
		</table>
	</div>

	<br>
	<br>
	<br>

<?php
	include 'footer.php';
?>