<?php 
	session_start();
	require_once('../Model/reportModel.php');

	if(isset($_POST['submit'])){

		$report = $_POST['report'];
		$status = report($report);
		if($status){
			header('location: ../View/Report.php');
		}
		else{
			echo "ERROR";
		}
	}
	
?>