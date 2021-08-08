<?php 
	require_once('../model/usersModel.php');

 ?>
<div id="main_content">
	<fieldset style="width: 40%">
		<legend>SEARCH</legend>
		<form method="POST" action="">
			<input type="text" name="name" style="width: 50%">
			<input type="submit" name="search" value="Search By Name">
		</form>
		<?php
		$allproduct = getAllEmployee();

		echo "<table border = 1 cellspacing = 0>
			<tr>
				<td><b>NAME</b></td>
				<td><b>PROFIT</b></td>
				<td><b>ACTION</b></td>
			</tr>";

			for($i = 0; $i < count($allproduct); $i++)
			 {
				$profit = $allproduct[$i]['sellingPrice']-$allproduct[$i]['buyingPrice'];		
				echo 	
					"<tr>
						<td>{$allproduct[$i]['name']}</td>
						<td>{$profit}</td>
						<td> 
							<a href='editProduct.php?id={$allproduct[$i]['Id']}'> Edit</a> | 
							<a href='deleteProduct.php?id={$allproduct[$i]['Id']}'> Delete </a> 
						</td>					
										
					</tr>";
			}

		echo "</table>";
	?>
		
	</fieldset>
</div>