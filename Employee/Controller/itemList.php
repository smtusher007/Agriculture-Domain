<?php 
		
	session_start();
	require_once('../Model/itemModel.php');

	if(isset($_POST['submit'])){

		$iName 	= $_POST['iName'];
		$sName 	= $_POST['sName'];
		$iInfo 	= $_POST['iInfo'];
		if($iName != ""){
			if($sName != ""){
				if($iInfo != "" ){

					$list = ['iName'=>$iName,'sName'=>$sName, 'iInfo'=>$iInfo];
				
				$status = item($list);

				if($status){
					header('location: ../View/ListedItems.php');
				 }
				else{
					echo "Error";
				}
			}else{
				echo "Enter information";
			}
			}else{
				echo "Enter Seller's Name";
			}
		}else{
			echo "Enter Item Name";
		}
	}

?>