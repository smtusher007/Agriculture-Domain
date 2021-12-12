<?php 
	
	require_once('../Model/employeeModel.php');

	$id = $_REQUEST['id'];

	$status = deleteEmployee($id);

	if($status){
		header('location:../View/Employee Information.php');

	}
	else{
		echo "Error";
	}
	
?>