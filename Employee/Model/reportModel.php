<?php 
		
	require_once('db.php');

 
 function report($report){
		$con = getConnection();
		$sql = "insert into report values('','{$report}')";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}
?>