<?php
	
	require_once('../Model/itemModel.php');

	$id = $_REQUEST['id'];
	$status = dltItem($id);

	if($status){
		header('location: ../View/ListedItems.php');
	}
	else{
		echo "Error";
	}

?>