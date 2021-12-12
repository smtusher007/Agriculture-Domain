<?php 
	session_start();
	require_once('../Model/employeeSalaryModel.php');

	if(isset($_POST['submit'])){

		$EmpName 	= $_POST['EmpName'];
		$EmpNid 	= $_POST['EmpNid'];
		$EmpEmail = $_POST['EmpEmail'];
		$EmpPhone = $_POST['EmpPhone'];
		$EmpSalary =$_POST['EmpSalary'];

		if($EmpName != ""){
			if($EmpNid != ""){
				if($EmpEmail != ""){
					if($EmpPhone != ""){
						if($EmpSalary !=""){

					$Emp = ['name'=>$EmpName,'nid'=>$EmpNid ,'email'=>$EmpEmail,'phoneNo'=>$EmpPhone,'salary'=>$EmpSalary];
				
				$status = addEmployeeSalary($Emp);

				if($status){
					header('location: ../View/Employee Salary.php');
				 }
				else{
					echo "Error";
				}

				}else{
					echo "Enter Salary";
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