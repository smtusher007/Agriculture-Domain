<?php 
		require_once('../Model/orderModel.php');
		if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$customerN = $_POST['customer'];
		$sellerN = $_POST['seller'];
		$order = $_POST['oItem'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];

		$orders = ['id='=>$id,'customerName'=>$customerN,'sellerName'=>$sellerN ,'orderedItem'=>$order,'quantity'=>$quantity,'price'=>$price];
		$status = editOrderList($orders);

		if($status)
		{
			header('location: ../View/OrderList.php');
		}
		else
		{
			header('location: ../Controller/editOrder.php?id={$id}');
		}
	}

?>