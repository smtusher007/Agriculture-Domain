<?php 

 require_once('db.php');

 
 function addEmployeeSalary($Emp){
		$con = getConnection();
		$sql = "insert into employeesalary values('','{$Emp['name']}' , '{$Emp['nid']}' , '{$Emp['email']}' , '{$Emp['phoneNo']}' , '{$Emp['salary']}'  )";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}
function AllEmployeesSalary(){
		$con = getConnection();
		$sql = "select id,name,nid,email,phoneNo,salary from employeesalary";
		$result = mysqli_query($con , $sql);
		return $result;
			


	}
function dltSeller($id){

	$con = getConnection();
	$sql = "delete from employeeinfo where id={$id}";
	if(mysqli_query($con, $sql)){
		return true;
	}else{
		return false;
	}


}

?>