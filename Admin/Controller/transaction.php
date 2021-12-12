<?php 
	
	session_start();
	require_once('../Model/transModel.php');

	if(isset($_POST['submit'])){

		$oId 	= $_POST['oId'];
		$status 	= $_POST['status'];
		if($oId != ""){
			if($status != ""){

					$payment = ['id'=>$oId,'status'=>$status];
				
				$status = status($payment);

				if($status){
					header('location: ../View/Transaction.php');
				 }
				else{
					echo "Error";
				}
			}else{
				echo "Enter status";
			}
		}else{
			echo "Enter a order id";
		}
	}

?>