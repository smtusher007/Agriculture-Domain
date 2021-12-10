<?php 

	session_start();
	require_once('../Model/infoModel.php');

	if(isset($_POST['submit'])){

		$info = $_POST['info'];
		$status = info($info);
		if($status){
			header('location: ../View/UpdateInfo.php');
		}
		else{
			echo "ERROR";
		}
	}
	
	//$data = json_decode($_REQUEST['data']);
	//print_r($data);


?>