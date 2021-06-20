<?php
	session_start();

	if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
		$username= $_POST['username'];
		$password= $_POST['password'];
		$gender= $_POST['gender'];
		$dateofbirth= $_POST['dateofbirth'];
		
		$type= $_POST['type'];

		if($name != '' && $email != '' && $username != '' && $password != '' && $gender != '' && $dateofbirth != '' ){
			$user =['name'=> $name, 'email'=>$email, 'username'=>$username, 'password'=> $password, 'gender'=> $gender,'dateofbirth'=> $dateofbirth, 'type'=>$type];
			$_SESSION['user'] = $user;
			header('location: ../view/registration.php');
		}else{
			echo "data is empty ";
		}
	}else{
		echo "invalid";
	}

?>