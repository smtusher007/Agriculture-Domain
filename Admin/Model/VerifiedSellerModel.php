<?php 

 require_once('db.php');

 
 function addVerifiedSeller($Ss){
		$con = getConnection();
		$sql = "insert into verifiedseller values('','{$Ss['name']}' , '{$Ss['nid']}' , '{$Ss['email']}' , '{$Ss['phoneNo']}' , '{$Ss['address']}' )";
				 if(mysqli_query($con , $sql)){
				 	return true;
				 }
				else{
					return false;
				}

	}
function AllVerifiedSellers(){
		$con = getConnection();
		$sql = "select id,name,nid,email,phoneNo,address from verifiedseller";
		$result = mysqli_query($con , $sql);
		return $result;
			


	}


?>