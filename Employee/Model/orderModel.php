<?php 

 require_once('db.php');

 
 function addOrder($order){
		$con = getConnection();
		$sql = "insert into orderlist values('' , '{$order['customerName']}' , '{$order['sellerName']}' , '{$order['orderedItem']}' , '{$order['quantity']}' , '{$order['price']}')";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}
function Orderlist(){
		$con = getConnection();
		$sql = "select * from orderlist";
		$result = mysqli_query($con , $sql);
		return $result;
			


	}


?>