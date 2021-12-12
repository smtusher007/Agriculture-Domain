<?php 

 require_once('db.php');

 
 function addSeller($Ss){
		$con = getConnection();
		$sql = "insert into sellerinfo values('','{$Ss['name']}' , '{$Ss['nid']}' , '{$Ss['email']}' , '{$Ss['phoneNo']}' , '{$Ss['address']}' , 'Seller')";
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
function dltSeller($id){

	$con = getConnection();
	$sql = "delete from sellerinfo where id={$id}";
	if(mysqli_query($con, $sql)){
		return true;
	}else{
		return false;
	}


}

function getSellerById($id){
	$con = getConnection();
	$sql = "select * from sellerinfo where id={$id}";
	$result = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($result); 
	return $data;
}

function editSeller($seller){
		$con = getConnection();
		$sql = "update sellerinfo set name='{$seller['name']}', nid='{$seller['nid']}', email='{$seller['email']}', phoneNo='{$seller['phoneNo']}', address='{$seller['address']}'' where id={$seller['id']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
}

?>