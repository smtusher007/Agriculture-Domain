<?php 
	session_start();
	require_once('../Model/orderModel.php');

	if(isset($_POST['submit'])){

		$CuName 	= $_POST['CuName'];
		$SeName 	= $_POST['SeName'];
		$Item = $_POST['Item'];
		$Quantity = $_POST['Quantity'];
		$Price =$_POST['Price'];

		if($CuName != ""){
			if($SeName != ""){
				if($Item != ""){
					if($Quantity != ""){
						if($Price !=""){

					$order = ['customerName'=>$CuName,'sellerName'=>$SeName ,'orderedItem'=>$Item,'quantity'=>$Quantity,'price'=>$Price];
				
				$status = addOrder($order);

				if($status){
					header('location: ../View/OrderList.php');
				 }
				else{
					echo "Error";
				}

				}else{
					echo "Enter Price";
				}

				}else{
					echo "Enter Quantity";
				}

				}else{
					echo "Enter A Item";
				}

			}else{
				echo "Enter Seller Name";
			}
		}else{
			echo "Enter a Customer Name";
		}
	}
?>