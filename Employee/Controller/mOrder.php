<?php 
	session_start();
	require_once('../Model/orderManageModel.php');

	if(isset($_POST['submit'])){

		$oID 	= $_POST['oID'];
		$dDate 	= $_POST['dDate'];
		$Address	= $_POST['Address'];
		if($oID != ""){
			if($dDate != ""){
				if($Address !=""){

					$order = ['id'=>$oID,'dDate'=>$dDate, 'address'=>$Address];
				
				$status = manage($order);

				if($status){
					header('location: ../View/ManageOrder.php');
				 }
				else{
					echo "Error";
				}
			}else{
				echo "Enter a address";
			}
			}else{
				echo "Enter Delivery Date";
			}
		}else{
			echo "Enter a order id";
		}
	}
	
?>