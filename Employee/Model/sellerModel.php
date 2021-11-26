<?php 

 require_once('db.php');

 
 function addSeller($Ss){
		$con = getConnection();
		$sql = "insert into sellerinfo values('','{$Ss['name']}' , '{$Ss['nid']}' , '{$Ss['email']}' , '{$Ss['phoneNo']}' , '{$Ss['address']}' , 'Customer')";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}

?>