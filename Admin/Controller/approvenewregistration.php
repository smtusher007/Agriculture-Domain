<?php 
	session_start();
	require_once('../Model/aprovenewregistrationModel.php');

	if(isset($_POST['submit'])){
        $EmpName 	= $_POST['EmpName'];
		$EmpNId   = $_POST['EmpId'];
		$EmpEmail = $_POST['EmpEmail'];
		$EmpPhone = $_POST['EmpPhone'];
		$EmpAddress =$_POST['EmpAddress'];

		if($EmpName != ""){
			if($EmpNId != ""){
				if($EmpEmail != ""){
					if($EmpPhone != ""){
						if($EmpAddress !=""){

					$Emp = ['name'=>$EmpName,'nid'=>$EmpNId ,'email'=>$EmpEmail,'phoneNo'=>$EmpPhone,'address'=>$EmpAddress];
				
				$status = addEmployee($Emp);

				if($status){
					header('location: ../View/Approve New Registration.php');
				 }
				else{
					echo "Error";
				}

				}else{
					echo "Enter Address";
				}

				}else{
					echo "Enter Phone Number";
				}

				}else{
					echo "Enter Email";
				}

			}else{
				echo "Enter NID Number";
			}
		}else{
			echo "Enter a Name";
		}
	}
?>