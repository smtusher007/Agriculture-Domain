<?php 

 require_once('db.php');

 
 function addOrder($order){
		$con = getConnection();
		$sql = "insert into orderlist values('' , '{$order['customerName']}' , '{$order['sellerName']}' , '{$order['orderedItem']}' , '{$order['quantity']}' , '{$order['price']}', '-{not assigned}-','-{not assigned}-','-{not assigned}-','-{not assigned}-')";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}
function Orderlist(){
		$con = getConnection();
		$sql = "select id,customerName,sellerName,orderedItem,quantity,price from orderlist";
		$result = mysqli_query($con , $sql);
		return $result;
			


	}
function getOrderById($id){
		$con = getConnection();
		$sql = "select * from orderlist where id={$id}";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result); 
		return $data;
}
function editOrderList($orders){
	$con = getConnection();
	$sql = "update orderlist set customerName='{$orders['customerName']}' , sellerName='{$orders['sellerName']}' ,orderedItem= '{$orders['orderedItem']}' , quantity='{$orders['quantity']}' , price='{$orders['price']}' where id={$orders['id']}}";
	if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
}


?>