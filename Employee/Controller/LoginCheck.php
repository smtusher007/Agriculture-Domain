<?php 
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				
				$myfile = fopen('../Model/emp.txt', 'r');
			
				while(!feof($myfile)){
					
					$data = fgets($myfile);
					$user = explode('|', $data);		
					
					if($username == trim($user[0]) && $password == trim($user[1])){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: ../View/Home.php');
					}
				}
				
				echo "invalid username or password";

			}else{
				echo "Invalid password";
			}
		}else{
			echo "Invalid username";
		}
	}
?>