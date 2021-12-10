<?php 
		
	require_once('db.php');

 
 function info($payment){
		$con = getConnection();
		$sql = "update orderlist set method='{$payment['method']}' where id='{$payment['id']}'";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}
function paymentInfo(){
		$con = getConnection();
		$sql = "select id,method from orderlist";
		$result = mysqli_query($con , $sql);
		return $result;
			


	}
?>