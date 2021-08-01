<?php
	session_start();

	if(isset($_POST['submit'])){

		$id= $_REQUEST['id'];
		$password= $_POST['password'];
		$name=$_POST['name'];
		$email= $_POST['email'];
		$type= $_POST['type'];

		if($id != '' && $password != '' $name != '' && $email != ''){
			
			if(strlen($password) >= 8){
				
				$user = $id."|".$password."|" .$name."|" .$email."|".$type;
				$file = fopen('info.txt', 'a');
				fwrite($file, $user);
				fclose($file);
				header('location: ../view/login.php');

			}else{
				header('location: ../view/registration.php?msg=password_error');
			}
		}else{
			header('location: ../view/registration.php?msg=null');
		}
	}else{
		echo "invalid request...";
	}


?>