<?php 

 require_once('db.php');

 
 function addSeller($Ss){
		$con = getConnection();
		$sql = "insert into sellerinfo values('','{$Ss['name']}' , '{$Ss['nid']}' , '{$Ss['email']}' , '{$Ss['phoneNo']}' , '{$Ss['address']}')";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}
function AllSeller(){
		$con = getConnection();
		$sql = "select id,name,nid,email,phoneNo,address from sellerinfo";
		$result = mysqli_query($con , $sql);
		return $result;
			


	}


?>