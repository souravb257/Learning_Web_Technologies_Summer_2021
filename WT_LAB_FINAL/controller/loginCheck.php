<?php
	session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];

		if($username != '' && $password != ''){
			
			$status = validate($username, $password);

			if($status){
				setcookie('flag', 'true', time()+3600, '/');
				$_SESSION['username'] = $username;
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