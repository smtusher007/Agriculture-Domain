<?php 

	require_once('../Model/sellerModel.php');


	$id = $_REQUEST['id'];
	$status = dltSeller($id);

	if($status){
		header('location: ../View/ManageOrder.php');
	}
	else{
		echo "Error";
	}


?>