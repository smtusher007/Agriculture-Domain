<?php 
		
	require_once('db.php');

 
 function item($list){
		$con = getConnection();
		$sql = "insert into listeditem values('' , '{$list['iName']}' , '{$list['sName']}' , '{$list['iInfo']}')";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}
function ListedItem(){
		$con = getConnection();
		$sql = "select * from listeditem";
		$result = mysqli_query($con , $sql);
		return $result;
			

	}
	function dltItem($id){

	$con = getConnection();
	$sql = "delete from listeditem where id={$id}";
	if(mysqli_query($con, $sql)){
		return true;
	}else{
		return false;
	}
  }

?>