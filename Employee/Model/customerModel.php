<?php 

 require_once('db.php');

 
 function addCustomer($Cs){
		$con = getConnection();
		$sql = "insert into customerinfo values('','{$Cs['name']}' , '{$Cs['nid']}' , '{$Cs['email']}' , '{$Cs['phoneNo']}' , '{$Cs['address']}' , 'Customer')";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}

?>