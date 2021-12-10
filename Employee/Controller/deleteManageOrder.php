<?php

	require_once('../Model/orderManageModel.php');

	$id = $_REQUEST['id'];
	$status = dltOrder($id);

	if($status){
		header('location: ../View/ManageOrder.php');
	}
	else{
		echo "Error";
	}

?>