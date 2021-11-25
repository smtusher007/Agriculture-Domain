<?php 
	session_start();
	require_once('../Model/signupModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				
				$status = validate($username , $password);

				if($status){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: ../View/Home.php');
					}
					else{
						header('location: ../View/Login.php');
					}


			}else{
				echo "Invalid password";
			}
		}else{
			echo "Invalid username";
		}
	}
?>