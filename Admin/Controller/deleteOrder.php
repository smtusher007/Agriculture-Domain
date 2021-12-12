<?php 
		
		require_once('../Model/orderModel.php');

		$id = $_REQUEST['id'];
		$status = deleteOrder($id);

		if($status){
			header('location: ../View/Customer Order.php');


		}
		else{
			echo "Error";
		}



?>