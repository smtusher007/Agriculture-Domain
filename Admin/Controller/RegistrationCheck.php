<?php 
	require_once('../Model/signupModel.php');

	if(isset($_POST['submit'])){

		$name 	= $_POST['name'];
		$email 	= $_POST['email'];
		$username = $_POST['username'] ;
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$gender = $_POST['gender'];
		$dob = $_POST['date'];

		if($name != ""){
			if($username != ""){
				if($password != ""){
					if($password = $confirmpassword){
						if($email !=""){

							$user = ['name'=>$name,'email'=>$email,'username'=>$username,'password'=>$password,'gender'=>$gender,'dob'=>$dob];

							$status = addEmp($user);


				 if($status){
				 	header('location: ../View/Login.php');
				 }
				else{
					echo "Error";
				}
						

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