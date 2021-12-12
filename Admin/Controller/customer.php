<?php 
	session_start();
	require_once('../Model/customerModel.php');

	if(isset($_POST['submit'])){

		$CsName 	= $_POST['CsName'];
		$CsNId 	= $_POST['CsId'];
		$CsEmail = $_POST['CsEmail'];
		$CsPhone = $_POST['CsPhone'];
		$CsAddress =$_POST['CsAddress'];

		if($CsName != ""){
			if($CsNId != ""){
				if($CsEmail != ""){
					if($CsPhone != ""){
						if($CsAddress !=""){

					$Cs = ['name'=>$CsName,'nid'=>$CsNId ,'email'=>$CsEmail,'phoneNo'=>$CsPhone,'address'=>$CsAddress];
				
				$status = addCustomer($Cs);

				if($status){
					header('location: ../View/Customer Info.php');
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