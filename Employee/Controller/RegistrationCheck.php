<?php 

	if(isset($_POST['submit'])){

		$name 	= $_POST['name'];
		$email 	= $_POST['email'];
		$username = $_POST['username'] ;
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];

		if($name != ""){
			if($username != ""){
				if($password != ""){
					if($password = $confirmpassword){
						if($email !=""){

						setcookie('name', $name, time()+3600, '/');
						setcookie('email', $email, time()+3600, '/');
						setcookie('username', $username, time()+3600, '/');
						setcookie('password', $password, time()+3600, '/');

						$myfile = fopen('../Model/emp.txt', 'a');
						$myuser = $username."|".$password."|".$email."\r\n";
						fwrite($myfile, $myuser);
						fclose($myfile);
						

						header('location: ../View/Login.php');
					}else{
						echo "Invalid email";
					}

					}else{
						echo "Password didn't match";
					}
				}else{
					echo "Invalid password";
				}
			}else{
				echo "Invalid username";
			}
		}else{
			echo "Invalid Name";
		}
	}
?>