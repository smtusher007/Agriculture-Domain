<?php

	require_once('../Model/sellerModel.php');

	$id 	   =  $_REQUEST['id'];
	$name      =  $_REQUEST['name'];
	$nid   	   =  $_REQUEST['nid'];
	$email     =  $_REQUEST['email'];
	$phoneNo   =  $_REQUEST['phoneNo'];
	$address   =  $_REQUEST['address'];

	$seller = ['id'=>$id, 'name'=>$name, 'nid'=>$nid, 'email'=>$email, 'phoneNo'=>$phoneNo, 'address'=>$address];
	$status = editSeller($seller);

	if($status){
		header('location: ../View/Sellers.php');
	}
	else{
		header('location: ../Controller/editSeller.php?id={$id}');
	}

?>