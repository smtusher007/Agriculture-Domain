<?php 
	
	require_once('../Model/sellerModel.php');

	$id = $_REQUEST['id'];
	$seller = getSellerById($id);
?>

<html>
<head>
	<title>Edit Seller Information</title>
</head>
<body>
	<div style="background-image: url('../Asset/img1.jpg');">
	<form method="post" action="../Controller/updateCustomer.php">
		<fieldset>
			<legend>Edit Seller Information</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?=$seller['name'] ?>"></td>
				</tr>
				<tr>
					<td>NID</td>
					<td><input type="text" name="nid" value="<?=$seller['nid'] ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?=$seller['email'] ?>"></td>
				</tr>
				<tr>
					<td>Phone No.</td>
					<td><input type="text" name="phoneNo" value="<?=$seller['phoneNo'] ?>"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="address" value="<?=$seller['address'] ?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$seller['id'] ?>"></td>
					<td><input type="submit" name="submit" value="Update"></td>
					<td><input type="reset" name="reset" value="Reset">
						<br><a href="../View/Sellers.php">Back</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>