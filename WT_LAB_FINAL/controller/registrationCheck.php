<?php
	session_start();

	if(isset($_POST['submit'])){

		$Employer Name= $_REQUEST['employer name'];
		$Company Name= $_POST['company name'];
		$Contact no.=$_POST['contact'];
		$User Name= $_POST['username'];
		$Password= $_POST['password'];

		if($employer name != '' && $company name != '' $contact no. != '' && $username != '' && $password != ''){
			
			if(strlen($password) >= 8){
				
				$user = $employer name."|".$company name."|" .$contact no."|" .$username."|".$password;
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