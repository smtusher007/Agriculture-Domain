<?php 

	require_once('../Model/customerModel.php');

	$name = $_REQUEST['name'];
	$nid = $_REQUEST['nid'];
	$email = $_REQUEST['email'];
	$id = $_REQUEST['id'];
	$phoneNo = $_REQUEST['phoneNo'];
	$address =$_REQUEST['address']

	$customer = ['id'=>$id, 'name'=> $name, 'email'=>$email, 'nid'=>$nid , 'phoneNo'=>$phoneNo , 'address'=>$address];
	$status = editCustomer($customer);

	if($status){
		header('location: ../View/CustomerInfo.php');
	}else{
		header('location: ../Controller/editCustom.php?id={$id}');
	}
?>