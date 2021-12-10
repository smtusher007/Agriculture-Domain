<?php 
		
	require_once('db.php');

 
 function manage($order){
		$con = getConnection();
		$sql = "update orderlist set dDate='{$order['dDate']}',address='{$order['address']}' where id='{$order['id']}'";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}
function manageOrder(){
		$con = getConnection();
		$sql = "select id,dDate,address from orderlist";
		$result = mysqli_query($con , $sql);
		return $result;
			


	}
?>