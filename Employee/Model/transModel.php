<?php 
		
	require_once('db.php');

 
 function status($payment){
		$con = getConnection();
		$sql = "update orderlist set status='{$payment['status']}' where id='{$payment['id']}'";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}
function payStatus(){
		$con = getConnection();
		$sql = "select id,status from orderlist";
		$result = mysqli_query($con , $sql);
		return $result;
			


	}
?>