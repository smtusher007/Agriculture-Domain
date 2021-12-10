<?php 
	
	require_once('db.php');
	
	function showHistory(){

		$con = getConnection();
		$sql = "select id,method,status from orderlist";
		$result = mysqli_query($con , $sql);
		return $result;
			}
?>