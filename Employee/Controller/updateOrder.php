<?php 
		require_once('../Model/orderModel.php');
		if(isset($_REQUEST['submit'])){
		$id = $_REQUEST['id'];
		$customerN = $_REQUEST['customer'];
		$sellerN = $_REQUEST['seller'];
		$order = $_REQUEST['oItem'];
		$quantity = $_REQUEST['quantity'];
		$price = $_REQUEST['price'];

		$ordersL = ['id='=>$id,'customerName'=>$customerN,'sellerName'=>$sellerN ,'orderedItem'=>$order,'quantity'=>$quantity,'price'=>$price];
		$status = editOrderList($ordersL);

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