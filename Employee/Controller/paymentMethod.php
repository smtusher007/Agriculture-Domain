<?php 
	session_start();
	require_once('../Model/paymentModel.php');

	if(isset($_POST['submit'])){

		$oId 	= $_POST['oId'];
		$method 	= $_POST['method'];
		if($oId != ""){
			if($method != ""){

					$payment = ['id'=>$oId,'method'=>$method];
				
				$status = info($payment);

				if($status){
					header('location: ../View/PaymentInfo.php');
				 }
				else{
					echo "Error";
				}
			}else{
				echo "Enter method";
			}
		}else{
			echo "Enter a order id";
		}
	}
	
?>