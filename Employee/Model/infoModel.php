<?php 
		
	require_once('db.php');

 
 		function info($info){

		$con = getConnection();
		$sql = "insert into information values('','{$info}')";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

		}
		function showInfo(){

		$con = getConnection();
		$sql = "select * from information";
		$result = mysqli_query($con , $sql);
		return $result;
			}
		function dltInfo($id){
			$con = getConnection();
			$sql = "delete from information where id={$id}";
			if(mysqli_query($con, $sql)){
				return true;
			}else{
				return false;
			}

		}
?>