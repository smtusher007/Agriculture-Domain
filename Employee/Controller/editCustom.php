<?php 
	
	require_once('../Model/customerModel.php');
	
	$id = $_REQUEST['id'];
	$customer = getCustomById($id);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>
</head>
<body>
	<div style="background-image: url('../Asset/img1.jpg');">
	<form method="post" action="../Controller/updateCustomer.php">
		<fieldset>
			<legend>Edit Customer Information</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?=$customer['name'] ?>"></td>
				</tr>
				<tr>
					<td>NID</td>
					<td><input type="text" name="nid" value="<?=$customer['nid'] ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?=$customer['email'] ?>"></td>
				</tr>
				<tr>
					<td>Phone No.</td>
					<td><input type="text" name="phoneNo" value="<?=$customer['phoneNo'] ?>"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="address" value="<?=$customer['address'] ?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$customer['id'] ?>"></td>
					<td><input type="submit" name="submit" value="Update"></td>
					<td><input type="reset" name="reset" value="Reset">
						<br><a href="../View/CustomerInfo.php">Back</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>