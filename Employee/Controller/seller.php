<?php 
	session_start();
	require_once('../Model/sellerModel.php');

	if(isset($_POST['submit'])){

		$SsName 	= $_POST['SsName'];
		$SsNId 	= $_POST['SsId'];
		$SsEmail = $_POST['SsEmail'];
		$SsPhone = $_POST['SsPhone'];
		$SsAddress =$_POST['SsAddress'];

		if($SsName != ""){
			if($SsNId != ""){
				if($SsEmail != ""){
					if($SsPhone != ""){
						if($SsAddress !=""){

					$Ss = ['name'=>$SsName,'nid'=>$SsNId ,'email'=>$SsEmail,'phoneNo'=>$SsPhone,'address'=>$SsAddress];
				
				$status = addSeller($Ss);

				if($status){
					header('location: ../View/Sellers.php');
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