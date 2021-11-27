<?php 

 require_once('db.php');

 
	function showCsContact(){
		$con = getConnection();
		$sql = "select name,type,email,phoneNo from customerinfo";
		$result = mysqli_query($con , $sql);
		return $result;
			


	}
	function showSsContact(){
		$con = getConnection();
		$sql = "select name,type,nid,email,phoneNo from sellerinfo";
		$result = mysqli_query($con , $sql);
		return $result;
			


	}

?>