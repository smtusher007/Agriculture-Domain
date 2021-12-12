<?php 
	
	require_once('../Model/customerModel.php');

	$id = $_REQUEST['id'];

	$status = deleteCustomer($id);

	if($status){
		header('location: ../View/Customer Info.php');

	}
	else{
		echo "Error";
	}
	
?>