<?php
	session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){

		$id= $_POST['id'];
		$password= $_POST['password'];

		if($id != '' && $password != ''){
			
			$status = validate($id, $password);

			if($status){
				setcookie('flag', 'true', time()+3600, '/');
				$_SESSION['id'] = $id;
				header('location: ../view/home.php');
			}else{
				echo 'invlaid id/password';
			}


		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}
?>