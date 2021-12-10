<?php 
		
		require_once('../Model/orderModel.php');

		$id = $_REQUEST['id'];
		$status = deleteOrder($id);

		if($status){
			header('location: ../View/OrderList.php');


		}
		else{
			echo "Error";
		}



?>