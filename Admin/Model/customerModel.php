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
	function AllCustomers(){
		$con = getConnection();
		$sql = "select id,name,nid,email,phoneNo,address from customerinfo";
		$result = mysqli_query($con , $sql);
		return $result;
			


	}

?>