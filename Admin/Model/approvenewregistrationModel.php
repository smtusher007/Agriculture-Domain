<?php 

 require_once('db.php');

 
 function addEmployee($Emp){
		$con = getConnection();
		$sql = "insert into employeeinfo values('','{$Emp['name']}' , '{$Emp['nid']}' , '{$Emp['email']}' , '{$Emp['phoneNo']}' , '{$Emp['address']}' , 'Employee')";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}
	function AllEmployees(){
		$con = getConnection();
		$sql = "select id,name,nid,email,phoneNo,address from employeeinfo";
		$result = mysqli_query($con , $sql);
		return $result;
			


	}

?>