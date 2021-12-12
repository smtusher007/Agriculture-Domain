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
	function deleteCustomer($id){
	$con = getConnection();
	$sql = "delete from customerinfo where id={$id}";
	if(mysqli_query($con, $sql)){
		return true;
	}else{
		return false;
	}

	}

	function getCustomById($id){
		$con = getConnection();
		$sql = "select * from customerinfo where id={$id}";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result); 
		return $data;
	}

	function editCustomer($customer){

		$con = getConnection();
		$sql = "update customerinfo set name='{$customer['name']}', nid='{$customer['nid']}', email='{$customer['email']}' , phoneNo='{$customer['phoneNo']}', address='{$customer['address']}' where id={$customer['id']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

	}

?>