<?php

	require_once('../Model/infoModel.php');


	$id = $_REQUEST['id'];
	$status = dltInfo($id);

	if($status){
		header('location: ../View/UpdateInfo.php');
	}
	else{
		echo "Error";
	}

?>