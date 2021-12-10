<?php 
	
	require_once('../Model/customerModel.php');

	$id = $_REQUEST['id'];

	$status = deleteCustomer($id);

	if($status){
		header('location: ../View/CustomerInfo.php');

	}
	else{
		echo "Error";
	}
	
?>