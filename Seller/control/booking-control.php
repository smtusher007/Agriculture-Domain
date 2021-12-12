<?php 
 include "header.php";
 require_once '../model/model.php';

	if($_SERVER['REQUEST_METHOD'] === "POST") 
	{
		$name = $_POST['productsname'];
		$totalweight = $_POST['totalweight']; 
		$phone = $_POST['phone']; 
		$date = $_POST['pdate']; 
		$message = $_POST['message'];

		if(!empty($_POST['productsname']) || !empty($_POST['totalweight']) || !empty($_POST['phone']) || !empty($_POST['pdate']) || !empty($_POST['message']))
		{
			$connection = new db();
			$conn=$connection->OpenCon();   
			$userQuery=$connection->BookingInsert($conn,"bookinginfo",$name,$totalweight,$phone,$date,$message);

			$flag=1;
			if($flag != null)
			{
					$successfulMessage = "New Record inserted";
			}
			else
			{ 
				$errorMessage = "error occurred"; 
			}
			$conn->close();
		}
	}
?>