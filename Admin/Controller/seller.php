<?php 
	session_start();
	require_once('../Model/sellerModel.php');

	if(isset($_POST['submit'])){

		$SsName 	= $_POST['SsName'];
		$SsNid 	= $_POST['SsNid'];
		$SsEmail = $_POST['SsEmail'];
		$SsPhone = $_POST['SsPhone'];
		$SsAddress =$_POST['SsAddress'];

		if($SsName != ""){
			if($SsNid != ""){
				if($SsEmail != ""){
					if($SsPhone != ""){
						if($SsAddress !=""){

					$Ss = ['name'=>$SsName,'nid'=>$SsNid ,'email'=>$SsEmail,'phoneNo'=>$SsPhone,'address'=>$SsAddress];
				
				$status = addSeller($Ss);

				if($status){
					header('location: ../View/Seller info.php');
				 }
				else{
					echo "Error";
				}

				}else{
					echo "Enter Address";
				}

				}else{
					echo "Enter Phone Number";
				}

				}else{
					echo "Enter Email";
				}

			}else{
				echo "Enter NID Number";
			}
		}else{
			echo "Enter a Name";
		}
	}
?>